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

} else {

    if($user){
        $MyToken = $facebook->getAccessToken();
        $user_profile = $facebook->api('/me');

        //create message with token gained before
        $post =  array(
            'access_token' => $MyToken,
            'message' => 'This is my automessage written on ' . date('Y-m-d H:i:s')
        );

        //and make the request
            $res = $facebook->api('/'.$facebook_user_id.'/feed', 'POST', $post);

        //For example this can also be used to gain user data
        //and this time only token is needed
        //$token =  array(
        //    'access_token' => $MyToken
        //);
        //$userdata = $facebook->api('/195631967124803', 'GET', $token);
        echo "posted<br />";

        echo "You, <b>" . $user_profile['name'] . "</b> are AWESOME!";
    }
}
?>
