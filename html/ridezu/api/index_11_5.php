<?php
$defaultHash=md5('xyxxyx');


require 'model/user.php';
require 'model/ride.php';
require 'model/account.php';
require 'util.php';
 
//Using Slim
require 'Slim/Slim.php';
$app = new Slim(array(
    'debug' => true));
//$app->hook('slim.before', 'authorize');

//Declare Rest calls
$app->get('/', 'getAPIList');


$app->get('/v/1/users', 'getUsers' );
$app->get('/v/1/users/:id',	'getUser');
$app->get('/v/1/users/search/fname/:query', 'findByName');
$app->get('/v/1/users/search/fbid/:query', 'findByFB');
$app->post('/v/1/users', 'addUser');
$app->put('/v/1/users/:id', 'updateUser');
$app->delete('/v/1/users/:id',	'deleteUser'); 
$app->get('/v/1/users/search/fbid/:fbid/location/:location','getNodes'); 


$app->get('/v/1/rides','getRides'); //get all rides - helper method - will be removed later
$app->get('/v/1/rides/:id','getRide'); //get particular ride
$app->get('/v/1/rides/:id/driver','getDriverRide'); //get driver data for particular ride
$app->get('/v/1/rides/:id/rider','getRiderRide'); //get rider data for particular ride

$app->get('/v/1/rides/search/driver/fbid/:fbid','findByDriverFB'); //search rides by a particular driver
$app->get('/v/1/rides/search/rider/fbid/:fbid','findByRiderFB'); //search rides by particular passenger
$app->get('/v/1/rides/search/fbid/:fbid','findRideByFB'); //search rides/requests by FB id

$app->get('/v/1//rides/search/eventtime/:query','findRidesByTime'); //search ride based on particular date/time (origin and dest are implicit)

$app->get('/rides/search/eventtime/:query/driver','findDriversByTime');
$app->get('/rides/search/eventtime/:query/rider','findRidersByTime');
			
//search for driver list
$app->get('/v/1/rides/search/fbid/:query/searchroute/:searchroute/searchdate/:searchdate/driver','findMatchingDrivers');
$app->get('/v/1/rides/search/fbid/:query/driver','findDefaultMatchingDrivers');
//search for rider list
$app->get('/v/1/rides/search/fbid/:query/searchroute/:searchroute/searchdate/:searchdate/rider','findMatchingRiders');
$app->get('/v/1/rides/search/fbid/:query/rider','findDefaultMatchingRiders');

$app->put('/v/1/rides/rideid/:rideid/rider','fillRide'); //add rider to the rides
$app->put('/v/1/rides/rideid/:rideid/driver','fillRideRequest'); //add driver to the ride request


$app->post('/v/1/rides/driver','postRide');  //post a ride
$app->post('/v/1/rides/rider','requestRide'); 
$app->put('/rides/:id'.'updateRide');
$app->delete('/v/1/rides/rideid/:rideid/fbid/:fbid','cancelRide');
$app->get('/v/1/rides/eventstate/COMPLETE','completeRide');
//get account data
$app->get('/v/1/account/fbid/:query/timeperiod/:timeperiod','getAccountSummary');




$app->run();


function getAPIList() {
global $defaultHash;

  $hash=getHashKey();
  if ($defaultHash <> $hash)
	return;

echo 'Get All users - GET - /users';
	echo '<p>';
	echo 'Get User Details - GET - /users/$id'; 
	echo '<p>';
	echo 'Search User by Name - GET - /users/search/fname/$query';
	echo '<p>';
	echo 'Search User by Facebook ID - GET - /users/search/fbid/$query';
	echo '<p>';
	echo 'Add user - POST - /users';
	echo '<p>';
	echo 'Update user - PUT -/users/$id';
	echo '<p>';
	echo 'Soft delete user - DELETE - /users/$id';
}



?>
