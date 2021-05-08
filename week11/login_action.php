<?php


require_once("includes.php");
if (isset($_SESSION['isLoggedIn'])) {
  $_SESSION['isLoggedIn'] = false;
}
$required = array("username","pass");
$_SESSION['errors'] = array();
foreach ($required as $index => $value) {
  if (!isset($_POST[$value]) || empty($_POST[$value])) {
    $_SESSION['errors'][] = "Username and password are required";
    die(header("Location: login.php"));
  }
}

/*initializing the correct count here and resetting it on each login*/
$_SESSION['correctcnt'] = 0;

require_once("classes/WebServiceClient.php");

$client = new WebServiceClient("http://cnmt310.braingia.org/authws/auth.php");
$data = array("apikey" => 'ucpkpsmosb',
				"apiuser" => 'user8',
				"password" => $_POST['pass'],
				"username" => $_POST['username']
				);
$client->setPostFields($data);
$authenticationRequest = $client->send();
$authObject = json_decode($authenticationRequest);

if (!is_object($authObject)) {
	$_SESSION['errors'][] = "Error: Authentication Issues";
	die(header("Location: login.php"));
}

if ($authObject->result == "Success") {
	$_SESSION['isLoggedIn'] = true;
	$_SESSION['name'] = $authObject->name;
	$_SESSION['role'] = $authObject->user_role;
	$_SESSION['email'] = $authObject->email;
	die(header("Location: home.php"));
} else { 
	$_SESSION['errors'][] = $AuthObject->message;
}

die(header("location: login.php"));

?>