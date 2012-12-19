<?php require_once 'rzconfig.php';

if(isset($_GET["c"])){$c=$_GET["c"];}
if(isset($_GET["t"])){$t=$_GET["t"];}

?>


<!DOCTYPE html>

<html lang="en">

    <head>
		<script>
      		var page="<?php echo $title;?>";
      		var myinfo={};
	    	myinfo.company="<?php echo $c;?>";
	    	if(localStorage.seckey!=undefined){
				var optimizely = optimizely || [];
				optimizely.push("disable");	
	    		}		
      	</script>		
      	<script src="//cdn.optimizely.com/js/157370915.js"></script>
      	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4touwfWlpbCpS0SKYvqfUOVddPnd0OBA&sensor=true&libraries=places"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ridezu</title>
        <meta name="description" content="Ridezu is a community for carpooling to and from the office. It's convenient, economical and green.  Join today!">
        <meta property="og:site_name" content="Ridezu"/>
        <meta property="fb:app_id" content="443508415694320"/>  
        <meta property="og:title" content="Ridezu"/>
        <meta property="og:description" content="Ridezu is a community for carpooling to and from the office. It's convenient, economical and green.  Join today!" /> 
        <meta property="og:type" content="company"/>
        <meta property="og:url" content="https://www.ridezu.com"/>
        <meta property="og:image" content="https://www.ridezu.com/images/ridezuAppIcon200.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css?v=<?php echo $rzversion;?>">
        <link rel="stylesheet" href="css/normalize.min.css?v=<?php echo $rzversion;?>">
		<link rel="stylesheet" href="css/corpstyle.css?v=<?php echo $rzversion;?>">
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
					
					<img id="cobrand" src=""/>
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

