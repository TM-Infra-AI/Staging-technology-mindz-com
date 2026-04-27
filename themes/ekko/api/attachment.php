<?php
$singh = $_POST['text'];
$attachment = basename($_FILES['file']['name']);
$targateDir = 'uploads/';
$fileStore = move_uploaded_file($_FILES['file']['tmp_name'], $targateDir . $attachment);
$attached =  $targateDir . $attachment;

if($singh){
    
    // Initialize cURL session
    $curl = curl_init();
    
    // Setup cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://func-chatbotapi-uat-eus.azurewebsites.net/api/chat',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "history" => array(
                array("user" => ".$singh.")
            )
        )),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        )
    ));
    
    // Execute cURL request and get the response
    $response = curl_exec($curl);
    
    // Check for cURL errors
    if (curl_errno($curl)) {
        echo 'Curl error: ' . curl_error($curl);
    } else {
        // Decode the JSON response
        $result = json_decode($response, true);
        
        // Check if decoding was successful
        if (json_last_error() === JSON_ERROR_NONE) {
            // Print the decoded response
            // echo '<pre>' . print_r($result, true) . '</pre>';
          foreach($result as  $st){
                echo $st;
          }
            
        } else {
            echo 'Oops something went wrong. Please try again. ';
        }
    }
    
    // Close the cURL session
    curl_close($curl);
    
}else if($attachment){

   $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://func-pdf-qa.azurewebsites.net/api/ingest',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_POSTFIELDS => array('guid' => '5888','file'=> new CURLFILE($attached)),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

}

?>