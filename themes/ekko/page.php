<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ekko
 * by KeyDesign
 */

  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }

  get_header();

  $section_style = $style_escaped = '';

  $top_padding = get_post_meta( get_the_ID(), '_themetek_page_top_padding', true );
  $bottom_padding = get_post_meta( get_the_ID(), '_themetek_page_bottom_padding', true );
  $page_bgcolor = get_post_meta( get_the_ID(), '_themetek_page_bgcolor', true );

  if ( '' !== $top_padding ) {
    $section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $top_padding ) ? $top_padding : $top_padding . 'px' ) . ';';
  }
  if ( '' !== $bottom_padding ) {
    $section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $bottom_padding ) ? $bottom_padding : $bottom_padding . 'px' ) . ';';
  }
  if ( '' !== $page_bgcolor ) {
    $section_style .= 'background-color:'.$page_bgcolor.';';
  }
  $style_escaped = $section_style ? 'style="' . esc_attr( $section_style ) . '"' : '';

  // The $style_escaped variable has been safely escaped in the following file: ekko/page.php Line: 29
?>
<div id="primary" class="content-area" <?php echo $style_escaped; ?>>
	<main id="main" class="site-main" role="main">

		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'core/templates/page/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) : ?>
					<div class="page-content comments-content container">
						<?php comments_template(); ?>
					</div>
				<?php endif;
			endwhile; // End of the loop.
		?>
		
		
		
			<div class="chatbot-footer" style="    position: fixed;z-index: 99;">
        <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <i class="material-icons type1 for-closed active" style="color: rgb(255, 255, 255);">
            <svg id="ic_bubble" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg>
        </i>
    </div>

    <div class="chat-box">
        <section class="msger">
            <header class="msger-header">
                <div class="msger-header-title">
                    <img src="/img/TM-Logo-white-Primary-new.png" alt="" style="width:40px;">
                </div>
                <div class="msger-header-options">
                    <span class="chat-box-toggle"><i class="fa-solid fa-xmark"></i></span>
                </div>
            </header>

            <main class="msger-chat">
                <div class="msg left-msg">
                    <div class="msg-img" style="background-image: url(https://cdn-icons-png.flaticon.com/512/10479/10479785.png)">
                    </div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">Technology Mindz</div>
                            <div class="msg-info-time" id="time"></div>
                        </div>

                        <div class="msg-text">
                            Hi, welcome to Technology Mindz! Go ahead and send me a message.
                        </div>
                        <div class="speack speak" id="speakButton"><img
                                src="https://cdn-icons-png.flaticon.com/512/6996/6996058.png"></div>
                    </div>
                </div>

            </main>

            <form class="msger-inputarea">
                <input type="text" name="text" class="msger-input" placeholder="Type your message">
                <label class="filelabel" id="filelabel">
                    <i class="fa fa-paperclip" id="mycls"></i>
                    <input class="FileUpload1" id="FileInput" name="attachment" type="file"/>
                </label>
                <input type="hidden" name="guid" class="guid" value="">
                <button type="button" class="mic" id="speakButton"><i class="fa fa-microphone"></i></button>
                <button type="submit" name="submit" class="msger-send-btn"><img src="/img/api-send.png"
                        style="width:45px;"></button>
            </form>
        </section>
    </div>
    </div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
