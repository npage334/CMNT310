<?php

require_once("Template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<form action='Postformpage.php' method='POST'>";
print 		"<label for='username'> Username</lable><br>";
print		"<input type='text' id='usernamebox' name='usernamebox'><br>";
print 		"<label for='password'> Password</lable><br>";
print		"<input type='text' id='passwordbox' name='passwordbox'><br>";
print		"<input type='submit' value='Submit'>";
print "</form>";
print $page->getBottomSection();

