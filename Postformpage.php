<?php

require_once("Template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->finalizeTopSection();

$username = htmlspecialchars($_POST['usernamebox']);
$password = htmlspecialchars($_POST['passwordbox']);

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<form action='/Postformpage.php' method='POST'>";
print 		"<h1>Username = $username</h1><br>";
print 		"<h1>Password = $password</h1><br>";
print "</form>";
print $page->getBottomSection();

