<?php

require_once("Template.php");

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

/*
  If processing makes it this far, we know there is *something* in
  each of the fields.  We don't yet know what that *something* is though,
  so additional form validation will be required.

  Importantly, the only way processing can get to the 
  following print statement is if the form contains something.
*/

print "Thank you for registering.\n";

print $page->getBottomSection();

