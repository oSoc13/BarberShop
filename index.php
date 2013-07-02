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
<?php
	require "dbconfig.php";
	$connection = mysqli_connect($host,$username,$password,$dbname);
	if (mysqli_connect_errno($connection))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}	  
	$result = mysqli_query($connection,"SELECT * FROM clients");

	?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<!-- the gallery-->
		<div class = "maindiv">
			
			<!-- demo images -->
			<div id="Gallery" class="gallery"> 
			<?php
			
				while($row = mysqli_fetch_array($result))
				{
				  echo '<div class="imgitem"><a href="images/full/' . $row['image'] . '"><img width="200" height="200" src="images/thumb/' . $row['image'] . ' " alt="Hair" /></a></div>' ;
				}
				mysqli_close($connection);
			?>
			</div> 
		
		</div>
		
		<div style="clear: both;">
		    <br />
		    <br />
            <button type="button">Deel met je vrienden op Facebook</button>

        </div>
<?php include 'footer.php'; ?>
<?php
    }
?>
