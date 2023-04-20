<?php

$client_id ="com.micopper.app";
$redirect_uri ="https://micooper.com/main.php";


//$client_secret = "MIGTAgEAMBMGByqGSM49AgEGCCqGSM49AwEHBHkwdwIBAQQg5azdBtXLzzfkGg2X
//QxmCZsDNfTY5IMH0bUbq3DQMy/CgCgYIKoZIzj0DAQehRANCAASW0pYlLW+QAvvh
//hF5pBODB8sMibX3w/dqfWXFcDidmwg7ZJ8AP2wo50YnDCbfCoDeG/u2/cke13Rhe
//M5jqBEyn";


// Redirect the user to the Apple Login page
header("Location: https://appleid.apple.com/auth/authorize?client_id={$client_id}&redirect_uri={$redirect_uri}&response_type=code&scope=email%20name");

// Handle the redirect back from Apple
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $token_url = "https://appleid.apple.com/auth/token";
    $data = array(
        "client_id" => $client_id,
        "client_secret" => $client_secret,
        "code" => $code,
        "redirect_uri" => $redirect_uri,
        "grant_type" => "authorization_code",
    );

    // Use the code to get an ID token and an access token
    $options = array(
        "http" => array(
            "method" => "POST",
            "header" => "Content-type: application/x-www-form-urlencoded",
            "content" => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($token_url, false, $context);
    $result = json_decode($result);

    // Use the ID token to authenticate the user
    $id_token = $result->id_token;
    // Use the access token to access the user's data
    $access_token = $result->access_token;
}
