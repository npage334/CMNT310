<?php

require_once("Template.php");
require("User.php");

$admin = array(
	"username" => "admin",
	"password" => "admin",
);
$user = array(
	"username" => "user",
	"password" => "user",
);

$page = new Template("My Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
/*

// Below is one option that meets the current requirements
// But is not very robust for validation

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  print "Thank you for registering";
} else {
  print "Please fill in the form";
}

*/
$expectedFields = array("username",
                        "pass1",
                        );

foreach ($expectedFields as $field) {
  if (!isset($_POST[$field]) || empty($_POST[$field])) {
    print "Please fill the form in.\n";
    print $page->getBottomSection();
    exit;
  }
}

 if ($_POST["username"] == $admin["username"] && $_POST["pass1"] == $admin["password"])
 {
	 print "logged in as admin.";
 } else if ($_POST["username"] == $user["username"] && $_POST["pass1"] == $user["password"])
 {
	 print "logged in as user.";
 } else {

print "Invalid login..\n";

	}


/*
  If processing makes it this far, we know there is *something* in
  each of the fields.  We don't yet know what that *something* is though,
  so additional form validation will be required.

  Importantly, the only way processing can get to the 
  following print statement is if the form contains something.
*/


print $page->getBottomSection();

?>