<?php

require __DIR__ . '/vendor/autoload.php';

use League\OAuth2\Client\Provider\Google;

// Replace these with your token settings
// Create a project at https://console.developers.google.com/
$clientId     = '597196954214-9i894m5mhnvdbic34h05bfr0bhff5oqe.apps.googleusercontent.com';
$clientSecret = '0Mq5aT6QwO_AmkcTfL5e0KUL';

// Change this if you are not using the built-in PHP server
$redirectUri  = 'http://localhost:8080/';

// Start the session
session_start();

// Initialize the provider
$provider = new Google(compact('clientId', 'clientSecret', 'redirectUri'));

// No HTML for demo, prevents any attempt at XSS
header('Content-Type', 'text/plain');

return $provider;
