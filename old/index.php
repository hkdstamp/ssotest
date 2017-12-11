<?php
error_reporting(0);

function getGoogleClient(){
    $querys = array(
            'client_id' => '597196954214-9i894m5mhnvdbic34h05bfr0bhff5oqe.apps.googleusercontent.com',
            'redirect_uri' => 'https://ssotest.demo.labs.mobingi.com/oauth2callback.php',
            'scope' => 'openid profile email',
            'response_type' => 'code',
    );

    return 'https://accounts.google.com/o/oauth2/auth?' . http_build_query($querys);

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="google-site-verification" content="HYpeXXGI1lNOhc5FIebGRetpP-nxjE7wqYH-6l4Wle4" />
</head>

<body>
testtest
<a href="<?php echo getGoogleClient(); ?>">google login</a>
</body>
</html>
