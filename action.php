<?php
    if (isset($_POST['submit'])){

        $legalName = $_POST['legalName'];
        $phone = $_POST['mobileNo'];
        $message = 'Hello' . $legalName .'! Thank you for your donation';

        $data = [
            'phone' => $phone, // Receivers phone
            'body' => $message, // Message
        ];
        $json = json_encode($data); // Encode data to JSON
        // URL for request POST /message
        $token = 'oqhht2tg396pqr46';
        $instanceId = 'instance384564';
        $url = 'https://api.chat-api.com/'.$instanceId.'/message?token='.$token;
        // Make a POST request
        $options = stream_context_create(['http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => $json
            ]
        ]);
        // Send a request
        $result = file_get_contents($url, false, $options);
        // print_r($result);
        if ($result) {
            header("location:thankyou.html");
          }else{
            echo "Someting Error";
          }
    }

?>