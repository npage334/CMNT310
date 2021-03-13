<?php

require_once("Template.php");

$page = new Template("My Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Registration Form</h1>\n";
print "<form action=\"sollution.php\" method=\"POST\">\n";
print "Username: <input type=\"text\" name=\"username\"><br>\n";
print "Password: <input type=\"password\" name=\"pass1\"><br>\n";
print "<input type=\"submit\" name=\"submit-form\"><br>\n";
print "</form>\n";
print $page->getBottomSection();

