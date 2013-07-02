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
<?php include 'footer.php'; ?>
