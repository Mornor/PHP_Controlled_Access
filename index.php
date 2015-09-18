<?php
require_once 'core/init.php'; 

$user = DB::getInstance()->update('users', 2, array(
	'password' => 'newPassword', 
	'name' => "Albert"
)); 
