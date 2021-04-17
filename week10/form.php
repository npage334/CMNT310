<?php

require_once("BootstrapTemplate.php");

$page = new BootstrapTemplate("My Page");
$page->addHeadElement('<link rel="stylesheet" href="inputcss.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Login</h1>\n";
print "<form action=\"sollution.php\" method=\"POST\">\n";
print "Username<br><input type=\"text\" name=\"username\"><br>\n";
print "Password<br><input type=\"password\" name=\"pass1\"><br>\n";
print "<input type=\"submit\" name=\"submit-form\"><br>\n";
print "</form>\n";
print $page->getBottomSection();

