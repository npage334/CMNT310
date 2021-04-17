<?php

require("User.php");

$userobj = new User();

print $userobj->getLoginStatus();

?>
