<?php

//add php-sdk
require 'facebook/facebook.php';
require 'facebook/facebookconfig.php';

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
        $MyToken = $facebook->getAccessToken();
        $user_profile = $facebook->api('/me');
?>
<?php include 'header.php'; ?>
		<!-- the gallery-->
		<div>
			<!-- demo images -->
			<ul id="Gallery" class="gallery"> 
				<li><a href="images/full/001.jpg"><img src="images/thumb/001.jpg" alt="Image 01" /></a></li>
				<li><a href="images/full/002.jpg"><img src="images/thumb/002.jpg" alt="Image 02" /></a></li> 
				<li><a href="images/full/003.jpg"><img src="images/thumb/003.jpg" alt="Image 03" /></a></li> 
				<li><a href="images/full/004.jpg"><img src="images/thumb/004.jpg" alt="Image 04" /></a></li> 
				<li><a href="images/full/005.jpg"><img src="images/thumb/005.jpg" alt="Image 05" /></a></li> 
				<li><a href="images/full/006.jpg"><img src="images/thumb/006.jpg" alt="Image 06" /></a></li> 
			</ul> 
		
		</div>

        <div>
            <button type="button">Deel met je vrienden op Facebook</button>

        </div>
<?php include 'footer.php'; ?>
<?php
    }
?>
