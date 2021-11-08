<?php
$db = mysqli_connect('localhost','root','');
mysqli_select-db($db,'db1');
mysqli_query($db,"SET NAMES 'UTF8'");
//fix bug
$username = htmlentities(addslashes($_POST['username']),ENT_QOUTES,'UTF-8')
$password = htmlentities(addslashes($_POST['password']),ENT_QOUTES,'UTF-8')
$q = "SELECT * FROM users WHERE username = '$username'
		AND password = '$password'";
$r = mysqli_query($db,$q);
$user = myaqli_fetch-assoc($r);
if(isset($user['id']))
{
	print "Login OK";
}
else
{
	print "Login Failed";
}

?>
