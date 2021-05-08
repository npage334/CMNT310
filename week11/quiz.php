<?php
require_once("includes.php");
require_once("classes/SiteTemplate.php");

$page = new SiteTemplate("Home Page");
$page->addHeadElement('<link rel="stylesheet" href="styles/home.css">');
$page->finalizeTopSection();
$page->finalizeBottomSection();

require_once("classes/WebServiceClient.php");

$client = new WebServiceClient("https://cnmt310.braingia.org/qws/q.php");
$data = array("apikey" => 'ucpkpsmosb',
				"apiuser" => 'user8'
				);
				
$client->setPostFields($data);
$authenticationRequest = $client->send();
$authObject = json_decode($authenticationRequest);

if (!is_object($authObject)) {
	$_SESSION['errors'][] = "Error: Server Issues";
}

if ($authObject->result == "Success") {
	$_SESSION['question'] = $authObject->question;
	$_SESSION['answer'] = $authObject->answer;
} else { 
	$_SESSION['errors'][] = $AuthObject->message;
}



print $page->getTopSection();

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
print "<h1 class=\"h3 mb-3 font-weight-normal\">";
print $_SESSION['question'];
print"</h1>\n";
print "<form class=\"form-signin\" action=\"answer.php\" method=\"POST\" class=\"form-signin\">";
print "<label for=\"inputUser\" class=\"sr-only\">Answer</label>";
print "<input type=\"text\" name=\"answer\" class=\"form-control\" id=\"inputUser\" placeholder=\"Answer\" autofocus>";
print "<button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">Confirm answer</button>";
print "</form>\n";
print'      </div>';
print'    </div>';
print'  </main>';
print'</div>';


print $page->getBottomSection();

