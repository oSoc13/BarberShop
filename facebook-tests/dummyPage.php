<?php

//add php-sdk
require 'facebook.php';
require 'facebookconfig.php';

$facebook = new Facebook(array(
  'appId'  => $appID,
  'secret' => $appSecret,
));

$user = $facebook->getUser(); // Get the UID of the connected user, or 0 if the Facebook user is not connected.
if($user == 0) {

    /**
     * Get a Login URL for use with redirects. By default, full page redirect is
     * assumed. If you are using the generated URL with a window.open() call in
     * JavaScript, you can pass in display=popup as part of the $params.
     * 
     * The parameters:
     * - redirect_uri: the url to go to after a successful login
     * - scope: comma separated list of requested extended perms
     */

    $login_url = $facebook->getLoginUrl($params = array('scope' => "publish_stream"));

    echo ("<script> top.location.href='".$login_url."'</script>");

} else{
?>
    <p>Hello there! You are already logged in to Facebook.<br />
    Choose your kapsel below.</p>
    
    <p>ik wil <a href="postData.php?myLink=img/kapsel1.png">dit kapsel</a>.</p>

<?php
}
?>
