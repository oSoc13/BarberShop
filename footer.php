<?php
    // No idea what goes here
?>

        <footer>
            <p>copyright OKFN Belgium</p>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- Include photoswipe files + jQuery -->
		<link href="css/photoswipe.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="script/klass.min.js"></script> 
		<script type="text/javascript" src="script/code.photoswipe.jquery-3.0.5.min.js"></script> 
		
        <script src="js/main.js"></script>
        
        <script type="text/javascript">		
			$(document).ready(function(){
			    var myPhotoSwipe = $("#Gallery a").photoSwipe(
			        {
			            enableMouseWheel: false , 
			            enableKeyboard: false 
			    }); 
			});
			
			$('button').click(function(event){
			    event.preventDefault();
			    
			    imageSelected="images/full/hair_1.jpg";
			    
			    $.ajax({
                  url: "facebook/postData.php",
                  data: "myLink="+imageSelected+"&FBID="+<?php print_r($user_profile["id"]); ?>
                }).done(function() {
                  window.alert("done");
                });
			    
			})
			</script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
