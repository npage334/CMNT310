<?php
class User
{

	private $username = null;
	private $password = null;
	private $emailAddress = null;
	private $isLoggedin = null;
	
	public function authenticate($username,$password)
	{
		echo null;//blank
	}
	
	public function logout()
	{
		echo null;//blank
	}
	
	public function getEmailAddress()
	{
		echo $emailAddress;
	}
	
	public function getLoginStatus()
	{
		echo $isLoggedin;
	}
	
}

?>