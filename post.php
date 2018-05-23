<?php

$username= $_POST['username'];
$password= $_POST['password'];

if(($username === 'admin') && ($password ==='password') or ($username ==='divyang' && ($password ==='123456')))
{
	echo "You have inserted correct user name and password <br>	";
	echo 'your user name is ' .$username. '<br>';
	echo 'your password  is ' .$password. '<br>';
}
else
{
	echo "Please insert correct details";
}


