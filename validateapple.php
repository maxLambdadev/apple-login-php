<?php
    // Get the authorization code from the Apple callback URL
    $auth_code = $_GET['code'];

    // Set up the request to exchange the authorization code for an access token
    $params = array(
        'grant_type' => 'authorization_code',
        'code' => $auth_code,
        'redirect_uri' => 'https://micooper.com/validateapple.php',
        'client_id' => 'com.micopper.app',
        'client_secret' => 'MIGTAgEAMBMGByqGSM49AgEGCCqGSM49AwEHBHkwdwIBAQQgU/ecISy4ettUlLV8R9UHg5kNC/Qu1t4N3tPddkbaZvygCgYIKoZIzj0DAQehRANCAASYStsRP5BKYcqUPbu4YmLaY5Y/ADuYkJ5AjU8JW+E8LlGcG1/zA5nsRw3PW1i20cTNYUWtfeAYtGGR43B1ncmJ',
    );

    $url = 'https://appleid.apple.com/auth/token';

    // Use cURL to send the request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode the response to get the access token
    $response = json_decode($response);
    $access_token = $response->access_token;

    // Use the access token to get the user's information
    $url = 'https://appleid.apple.com/auth/userinfo';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $access_token));
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode the response to get the user's information
    $response = json_decode($response);
    $user_id = $response->sub;
    $email = $response->email;
    $name = $response->name;