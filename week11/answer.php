<?php
require_once("includes.php");
require_once("classes/SiteTemplate.php");

$page = new SiteTemplate("Home Page");
$page->addHeadElement('<link rel="stylesheet" href="styles/home.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();



print $page->getTopSection();

if ($_POST['answer'] == $_SESSION['answer'])
{
	$_SESSION['correctcnt'] += 1;
	$message = 'Correct';
} else {
	$message = 'Incorrect';
}


/*Navbar from https://getbootstrap.com/docs/4.5/examples/navbars/#*/
/* I think the navbar is meant to have your current page as active and the rest as inactive to 
show what page you're on, but i'm not doing that. I don't want to edit it for each page. */
print'<nav class="navbar navbar-expand navbar-dark bg-dark">';
print'  <a class="navbar-brand" href="#">Quiz Questions</a>';
print'  <div class="collapse navbar-collapse" id="navbarsExample02">';
print'    <ul class="navbar-nav mr-auto">';
print'      <li class="nav-item active">';
print'        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>';
print'      </li>';
print'      <li class="nav-item active">';
print'        <a class="nav-link" href="quiz.php">Questions<span class="sr-only">(current)</span></a>';
print'      </li>';
print'      <li class="nav-item active">';
print'        <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>';
print'      </li>';
print'    </ul>';
print'  </div>';
print'</nav>';

/*This is also from https://getbootstrap.com/docs/4.5/examples/navbars/#*/
print'<div class="container">';
print'  <main role="main">';
print'    <div class="jumbotron">';
print'      <div class="col-sm-8 mx-auto">';
print'        	<h1>';
print $message;
print'</h1>';
print'			<p>you have ';
print $_SESSION["correctcnt"];
print' correct answers.<p>';
print'<p><a href="quiz.php">Get Another Question</a>   <a href="home.php">Back to Dashboard</a></p>';
print'      </div>';
print'    </div>';
print'  </main>';
print'</div>';



print $page->getBottomSection();

