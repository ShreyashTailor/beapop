<?php
session_start();

// Your TikTok app credentials
$client_key = 'awjfemyua1xs2jps';
$redirect_uri = 'https://beap.pages.dev/callback.php'; // Adjusted to your redirect URI

// Generate a random state to mitigate CSRF attacks
$_SESSION['state'] = bin2hex(random_bytes(16));

// TikTok authorization URL
$authorize_url = "https://www.tiktok.com/v2/auth/authorize/?client_key={$client_key}&scope=user.info.basic&response_type=code&redirect_uri=" . urlencode($redirect_uri) . "&state={$_SESSION['state']}";

// Redirect user to TikTok's authorization page
header('Location: ' . $authorize_url);
exit();
?>
