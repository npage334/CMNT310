<?php
class User
{

	private $username = null;
	private $password = null;
	private $emailAddress = null;
	private $isLoggedin = null;
	
	public function authenticate($inusername,$inpassword)
	{
		if ($this->$username = $inusername && $this->$password = $inpassword)
		{
			return true;
		} else {
			return false;
		}
		
		
	}
	
	public function setusername($userin)
	{
		$username = $userin;
	}
	
	public function setpassword($passin)
	{
		$password = $passin;
	}
	
	public function logout()
	{
		return null;//blank
	}
	
	public function getEmailAddress()
	{
		return $emailAddress;
	}
	
	public function getLoginStatus()
	{
		return $isLoggedin;
	}
	
}

?>