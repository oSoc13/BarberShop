<?php
    $base_url = "http://barbershapp.webvi.be/";

if (isset($_REQUEST["myLink"])) {
    $the_link = $_REQUEST["myLink"];
    $full_link = $base_url . $the_link;
    $the_message = "Dankzij #Friank wordt dit mijn nieuwe kapsel: " . $full_link . "!";
    $fbID = $_REQUEST["FBID"];
    $user = $fbID;

    //add php-sdk
    require 'facebook.php';
    require 'facebookconfig.php';


    $facebook = new Facebook(array(
      'appId'  => $appID,
      'secret' => $appSecret,
    ));


    if(isset($_REQUEST["myLink"])){
        //$MyToken = $facebook->getAccessToken();
        $user_profile = $facebook->api('/me');

        //create message with token gained before
        
        $post =  array(
            'access_token' => $MyToken,
            'message' => $the_message
        );

        //and make the request
        $res = $facebook->api('/'.$facebook_user_id.'/feed', 'POST', $post);
        
        
        //require_once 'write_to_db.php';
        //writeToDB($user_profile['name'], $the_link);
    }
}
?>
