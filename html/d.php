<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

if(isset($_GET["fbid"])){$fbid=$_GET["fbid"];}
if(isset($_GET["seckey"])){$seckey=$_GET["seckey"];}
if(isset($_GET["d"])){$d=$_GET["d"];}

if($fbid && $seckey){
	$dbh=mysql_connect ("localhost", "ridezu", "ridezu123") or die ('I cannot connect to the database because: ' . mysql_error());
	mysql_select_db ("ridezu");
	mysql_query("DELETE FROM userprofile WHERE fbid='$fbid' and seckey='$seckey'") or die(mysql_error());
	echo "deleted";
	header('Location: d.php?d=1');
	}

?>
<html>
<body>
<script>
  var fbstate="";
  var fbid="";
  var seckey="";
  var fbstate1="";

function remove1(){
	alert("fbid and seckey removed from local storage");
	localStorage.removeItem('fbid');
	localStorage.removeItem('seckey');
	document.getElementById("seckey").innerHTML="";
	document.getElementById("fbid").innerHTML="";
	}
</script>

<br/>Facebook state (front end): <span id="fbstate"></span> 
<br/>Facebook state (back end): <span id="fbstate1"></span> 
<br/><br/>User id: <div id="fbid"></div> <a href="#" onclick="remove1();return false;">Remove</a> 
<br/><br/>Seckey: <div id="seckey"></div> <a href="#" onclick="remove1();return false;">Remove</a>

<?php if (isset($d)==false){ ?> 
	<br/><br/>Delete User (kiss your user goodbye): <span id="deleteuser"></span> 
<?php } ?>

<?php if (isset($d)){ ?> 
	<br/><br/>User removed from db 
<?php } ?>


<div id="fb-root"></div>
<iframe id="fbauth" src="fbauth.php" style="width:0px;height:0px;"></iframe>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '443508415694320', // App ID from the App Dashboard
      channelUrl : 'ridezu.com/channel.html', // Channel File for x-domain communication
      status     : true, // check the login status upon init?
      oauth 	: true,
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });

    // Additional initialization code such as adding Event Listeners goes here
   FB.getLoginStatus(function(response) {
	 if (response.status === 'connected') {
	   // the user is logged in and has authenticated your
	   // app, and response.authResponse supplies
	   // the user's ID, a valid access token, a signed
	   // request, and the time the access token 
	   // and signed request each expire
	   var uid = response.authResponse.userID;
	   var accessToken = response.authResponse.accessToken;
	   fbstate="This user is logged into the app <a href=\"#\" onclick=\"logout();\">Logout</a>";
		showfbstate();

	 } else if (response.status === 'not_authorized') {
	   // the user is logged in to Facebook, 
	   // but has not authenticated your app
	   fbstate="This user is logged into Facebook but not authorized in this app. <a href=\"#\" onclick=\"logout();\">Logout</a>";
		showfbstate();

	 } else {
	   // the user isn't logged in to Facebook.
	   fbstate="The user is not logged into Facebook. <a href=\"#\" onclick=\"logout();\">Logout</a>";
		showfbstate();
	 }
	});
	
  };

  // Load the SDK's source Asynchronously
  // Note that the debug version is being actively developed and might 
  // contain some type checks that are overly strict. 
  // Please report such bugs using the bugs tool.
  (function(d, debug){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
     ref.parentNode.insertBefore(js, ref);
   }(document, /*debug*/ false));


</script>



<script>
  
  if(localStorage.fbid){fbid=localStorage.fbid;}
  if(localStorage.seckey){seckey=localStorage.seckey;}

  function authuser(data){
	  x=JSON.parse(data);
	  
	  if(x.seckey){
		 localStorage.fbid=x.fbid;fbid=localStorage.fbid;
		 localStorage.seckey=x.seckey;seckey=localStorage.seckey;
		 fbstate1="Logged on to back end";
		 showfbstate();
		 }

	  if(x.nouser){
		 fbstate1="Logged off to back end";
		 showfbstate();
		  }
	  }

function showfbstate(){
	document.getElementById("fbstate").innerHTML=fbstate;
	document.getElementById("fbstate1").innerHTML=fbstate1;
	if(localStorage.fbid){document.getElementById("fbid").innerHTML=fbid;}
	if(localStorage.seckey){document.getElementById("seckey").innerHTML=seckey;}
	if(localStorage.seckey && localStorage.fbid){document.getElementById("deleteuser").innerHTML="<a href=\"d.php?fbid="+fbid+"&seckey="+seckey+"\">Delete User</a>";}
	}  

function logout(){
	FB.logout(function(response) 
		{location.reload();
		});
	}


	
</script>


</body>
</html>