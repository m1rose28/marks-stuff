<?php require_once 'rzconfig.php'; ?>

<!DOCTYPE html>

<html lang="en">

    <head>
      	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4touwfWlpbCpS0SKYvqfUOVddPnd0OBA&sensor=true&libraries=places"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ridezu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css?v=<?php echo $rzversion;?>">
        <link rel="stylesheet" href="css/normalize.min.css?v=<?php echo $rzversion;?>">
		<link rel="stylesheet" href="css/corpstyle.css?v=<?php echo $rzversion;?>">
      	<script>
      	var page="<?php echo $title;?>";
      	</script>
    </head>
    <body>
        <header>
			<style>
				body.connected #login { display: none; }
				body.connected #logout { display: block; }
				body.not_connected #login { display: block; }
				body.not_connected #logout { display: none; }
			</style>
	        
			<div class="corpwrapper">
				<div id="corplogo">
					<h1><a href="/index.php"><img src="images/ridezulogo.png" alt="Ridezu" /></a></h1>
				</div>
				
				<div id="corpmenu">
					<ul>
						<li><a href="/howitworks.php">how it works</a></li>
						<li><a href="/benefits.php">benefits</a></li>
						<li><a href="/safety.php">safety</a></li>
						<li><a href="/faq.php">faq</a></li>
						<li id="lin" style="display:none;"><a href="#" onclick="loginUser();">login</a></li>
						<li id="lout" style="display:none;"><a href="#" onclick="logoutUser();">logout</a></li>
					</ul>
				</div>
			</div>
		</header>
