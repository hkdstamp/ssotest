<?php
error_reporting(0);

//var_dump($_GET["code"]);


function getGoogleAuthToken($code) {
    $baseURL = 'https://accounts.google.com/o/oauth2/token';
    $params = array(
            'code'          => $code,
            'client_id'     => '597196954214-9i894m5mhnvdbic34h05bfr0bhff5oqe.apps.googleusercontent.com',
            'client_secret' => '0Mq5aT6QwO_AmkcTfL5e0KUL',
            'redirect_uri'  => 'htttps://ssotest.demo.labs.mobingi.com/oauth2callback.php',
            'grant_type'    => 'authorization_code'
    );
    $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
    );

    $options = array('http' => array(
            'method' => 'POST',
            'content' => http_build_query($params),
            'header' => implode("\r\n", $headers),
    ));

    $response = json_decode(
            file_get_contents($baseURL, false, stream_context_create($options)));

    if(!$response || isset($response->error)){
//var_dump($response);

        return 'error';
    }

    return $response->access_token;
}

$atoken = getGoogleAuthToken($_GET["code"]);

// リダイレクト
header("Location: https://ssotest.demo.labs.mobingi.com/dashboard.php?access_token=${atoken}");
~                                                                                                     
