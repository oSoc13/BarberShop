<?php

require 'facebook.php';
require 'facebookconfig.php';

$facebook = new Facebook(array(
  'appId'  => $appID,
  'secret' => $appSecret,
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    // Get the user profile data you have permission to view
    $user_profile = $facebook->api('/me');
    //echo "<pre>";
    $yourID = $user_profile['id'];
    //print_r($yourID);
    //echo "</pre>";
  } catch (FacebookApiException $e) {
    $user = null;
  }
} else {
  die('<script>top.location.href="'.$facebook->getLoginUrl().'";</script>');
}
?>
