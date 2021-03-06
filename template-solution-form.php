<?php

require_once("Template.php");

$page = new Template("My Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();



print $page->getTopSection();
print "<div>";
print "<h1>Registration Form</h1>\n";
print "<form action=\"template-solution-action.php\" method=\"POST\" id=\"form\">\n";
print "Username: <input type=\"text\" name=\"username\"><br>\n";
print "Email Address: <input type=\"email\" name=\"email\"><br>\n";
print "Password: <input type=\"password\" name=\"pass1\"><br>\n";
print "Confirm Password: <input type=\"password\" name=\"pass2\"><br>\n";
print "<input type=\"submit\" name=\"submit-form\"><br>\n";
print "</form>\n";
print "</div>";

print "<script src='jquery.js'></script>";
print "<script src='jquery.validate.js'></script>";
print "<script src='validation.js'</script>";
print "<script>";
print    "$('form').validate();";
print "</script>";

print $page->getBottomSection();

