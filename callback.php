<?php
session_start();

// Your TikTok app credentials
$client_key = 'awjfemyua1xs2jps';
$client_;
$resecret = 'W1eyD0EIApkZi8WWWHUy7PqQ3AfXQGe2'direct_uri = 'https://beap.pages.dev/callback.php'; // Adjusted to your redirect URI

// Endpoint for obtaining access token
$token_url = "https://open.tiktokapis.com/oauth/access_token/";

// Ensure the state matches to mitigate CSRF attacks
if ($_GET['state'] !== $_SESSION['state']) {
    die('State mismatch. Possible CSRF attack.');
}

// Exchange the authorization code for an access token
$code = $_GET['code'];

// Prepare the POST request
$data = array(
    'client_key' => $client_key,
    'client_secret' => $client_secret,
    'code' => $code,
    'grant_type' => 'authorization_code',
    'redirect_uri' => $redirect_uri
);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($token_url, false, $context);

if ($result === FALSE) {
    die('Failed to obtain access token.');
}

// Decode the response to extract the access token
$response = json_decode($result, true);
$access_token = $response['access_token'] ?? '';

// Here, you would typically store the access token in your application's session or database
echo "Access Token: " . htmlspecialchars($access_token);
?>
