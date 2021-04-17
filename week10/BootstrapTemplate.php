<?php
require_once("Template.php");

class BootstrapTemplate extends Template {

//this file extends the bast template file and adds the bootstrap souce on.

function finalizeTopSection() {
	$returnVal = "";
	$returnVal .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3E/ihU7zmQxVncDAy5uIKz4rEkgIXeM>';
	$returnVal .= "<!doctype html>\n";
	$returnVal .= "<html lang=\"en\">\n";
	$returnVal .= "<head><title>";
	$returnVal .= $this->_title;
	$returnVal .= "</title>\n";
  $returnVal .= $this->_headSection;
	$returnVal .= "</head>\n";
	$returnVal .= "<body>\n";

	$this->_top = $returnVal;

} //end function finalizeTopSection

function finalizeBottomSection() {
	$returnVal = "";
  $returnVal .= $this->_bottomSection;
  $returnVal .= '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
    $returnVal .= '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
	$returnVal .= "</body>\n";
	$returnVal .= "</html>\n";

	$this->_bottom = $returnVal;

} //end function finalizeBottomSection

}