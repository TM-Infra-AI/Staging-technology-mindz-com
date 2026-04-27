<?php
 $singh = $_POST['text'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://channel-openai.openai.azure.com/openai/deployments/gpt-35-turbo/chat/completions?api-version=2024-02-15-preview',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'
{   "temperature": 0,
    "max_tokens": 1000,
    "top_p": 1.0,
    "data_sources": [
        {
            "type": "AzureCognitiveSearch",
            "parameters": {
                "endpoint": "https://azure-ai-search-chatbot001.search.windows.net",
                "key": "Xpztc8voup2A94S78bLoaaFxJ3zV07MhBroSe0gxkSAzSeDuRtiE",
                "index_name": "azure-ai-index003"
            }
        }
    ],
    "messages": [
        {
            "role": "assistant",
            "content": "You are an AI assistant that helps people find information."
        },
        {
            "role": "user",
            "content": "'.$singh.'"
        }
    ]
}
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'api-key: 6ec76727b0e14cc9944ce23c9ff3c362'
  ),
));

$response = curl_exec($curl);
$result = json_decode($response,true);
curl_close($curl);
echo $result['choices'][0]['message']['content'];