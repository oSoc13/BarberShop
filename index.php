<<<<<<< HEAD
<?php include 'header.php'; ?>
=======

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css"> 

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
	</head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

>>>>>>> 856db4deae0d6bff7603ef7c60fa342835380b19
		<!-- the gallery-->
		<div>
			
			<!-- demo images -->
			<ul id="Gallery" class="gallery"> 
<<<<<<< HEAD
				<li><a href="images/full/001.jpg"><img src="images/thumb/001.jpg" alt="Image 01" /></a></li>
				<li><a href="images/full/002.jpg"><img src="images/thumb/002.jpg" alt="Image 02" /></a></li> 
				<li><a href="images/full/003.jpg"><img src="images/thumb/003.jpg" alt="Image 03" /></a></li> 
				<li><a href="images/full/004.jpg"><img src="images/thumb/004.jpg" alt="Image 04" /></a></li> 
				<li><a href="images/full/005.jpg"><img src="images/thumb/005.jpg" alt="Image 05" /></a></li> 
				<li><a href="images/full/006.jpg"><img src="images/thumb/006.jpg" alt="Image 06" /></a></li> 
=======
			<?php
				for ($i = 1; $i <= 13; ++$i)
				{
					echo '<li><a href="images/full/hair_' . $i . '.jpg"><img width="200" src="images/thumb/hair_' . $i . '.jpg" alt="Hair" /></a></li>' ;
				}
			?>
>>>>>>> 856db4deae0d6bff7603ef7c60fa342835380b19
			</ul> 
		
		</div>

<<<<<<< HEAD
        <div>
            <button type="button">Deel met je vrienden op Facebook</button>

        </div>
<?php include 'footer.php'; ?>
=======
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- Include photoswipe files + jQuery -->
		<link href="css/photoswipe.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="script/klass.min.js"></script> 
		<script type="text/javascript" src="script/code.photoswipe.jquery-3.0.5.min.js"></script> 
		
        <script src="js/main.js"></script>
        
        <script type="text/javascript">		
			$(document).ready(function(){ var myPhotoSwipe = $("#Gallery a").photoSwipe({ enableMouseWheel: false , enableKeyboard: false }); }); 
			</script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
>>>>>>> 856db4deae0d6bff7603ef7c60fa342835380b19
