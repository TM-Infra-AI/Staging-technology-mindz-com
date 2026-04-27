<?php
/*
Plugin Name: Custom Chatbot Plugin
Description: Implements a chatbot functionality using OpenAI GPT-3.5 model
Version: 1.0
*/

// Enqueue scripts and styles
function enqueue_custom_scripts_and_styles() {
    // Enqueue Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/5c3f804e7a.js', array(), null, true);

    // Enqueue custom JavaScript
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'custom-script.js', array('jquery'), '1.0', true);

    // Enqueue custom CSS
    wp_enqueue_style('custom-style-file', plugin_dir_url(__FILE__) . 'custom-style.css', array(), '1.0', 'all');

    // Pass variables to JavaScript
    wp_localize_script('custom-script', 'chatVariables', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'bot_img' => plugin_dir_url(__FILE__) . 'assets/bot-image.svg',
        'person_img' => plugin_dir_url(__FILE__) . 'assets/person-image.svg',
        'assistant_name' => 'Technology Mindz',
        'user_name' => 'User'
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_and_styles');

// Define shortcode function for chatbot
function custom_chat_interface_shortcode() {
    ob_start();
    ?>
    <section class="msger">
        <header class="msger-header">
            <div class="msger-header-title">
                <i class="fas fa-comment-alt"></i> SimpleChat
            </div>
            <div class="msger-header-options">
                <span><i class="fas fa-cog"></i></span>
            </div>
        </header>

        <main class="msger-chat">
            <div class="msg left-msg">
                <div class="msg-img"
                     style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>

                <div class="msg-bubble">
                    <div class="msg-info">
                        <div class="msg-info-name">Technology Mindz</div>
                        <div class="msg-info-time">12:45</div>
                    </div>

                    <div class="msg-text">
                        Hi, welcome to Technology Mindz! Go ahead and send me a message. 😄
                    </div>
                </div>
            </div>
        </main>

        <form class="msger-inputarea">
            <input type="text" name="text" class="msger-input" placeholder="Enter your message...">
            <button type="submit" name="submit" class="msger-send-btn">Send</button>
        </form>
        <button id="speakButton">Speak</button>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_chat_interface', 'custom_chat_interface_shortcode');

// Handle form submission via AJAX
add_action('wp_ajax_process_gpt3_request', 'process_gpt3_request');
add_action('wp_ajax_nopriv_process_gpt3_request', 'process_gpt3_request');
function process_gpt3_request() {
    // Ensure that the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
        $user_input = sanitize_text_field($_POST['text']);

        // Call function to interact with OpenAI API and get the bot response
        $response = interact_with_openai_api($user_input);

        // Check if the response is successful
        if (!is_wp_error($response)) {
            // Send the sanitized response as JSON
            wp_send_json_success($response);
        } else {
            // Send an error response
            wp_send_json_error($response->get_error_message());
        }
    } else {
        // Send an error response if the request is invalid
        wp_send_json_error('Invalid request');
    }
    exit;
}

// Function to interact with OpenAI API
function interact_with_openai_api($user_input) {
    // Prepare the data for the request
    $data = array(
        "temperature" => 0,
        "max_tokens" => 1000,
        "top_p" => 1.0,
        "data_sources" => array(
            array(
                "type" => "AzureCognitiveSearch",
                "parameters" => array(
                    "endpoint" => "https://azure-ai-search-chatbot001.search.windows.net",
                    "key" => "Xpztc8voup2A94S78bLoaaFxJ3zV07MhBroSe0gxkSAzSeDuRtiE",
                    "index_name" => "azure-ai-index003"
                )
            )
        ),
        "messages" => array(
            array(
                "role" => "assistant",
                "content" => "You are an AI assistant that helps people find information."
            ),
            array(
                "role" => "user",
                "content" => $user_input
            )
        )
    );

    // Send the request using wp_remote_post
    $response = wp_remote_post(
        'https://channel-openai.openai.azure.com/openai/deployments/gpt-35-turbo/chat/completions?api-version=2024-02-15-preview',
        array(
            'body'        => json_encode($data),
            'headers'     => array(
                'Content-Type' => 'application/json',
                'api-key'      => '6ec76727b0e14cc9944ce23c9ff3c362'
            ),
            'method'      => 'POST',
            'data_format' => 'body',
        )
    );

    // Check for errors
    if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
        // Parse the response and return the bot's message
        $body = wp_remote_retrieve_body($response);
        $result = json_decode($body, true);
        if (isset($result['choices'][0]['message']['content'])) {
            return $result['choices'][0]['message']['content'];
        } else {
            return new WP_Error('invalid_response', 'Invalid response format');
        }
    } else {
        // Return a WP_Error object with the error message
        return new WP_Error('api_error', 'Error communicating with OpenAI API');
    }
}