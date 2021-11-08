
qli_connect('localhost','root','');
lect_db($db,'db1');
ery($db,"SET NAMES 'UTF8'");
 = htmlentities(addslashes($_POST['username'];),ENT_QOUTES,'UTF-8');
 = htmlentities(addslashes($_POST['password'];),ENT_QOUTES,'UTF-8');
 ECT * FROM users WHERE username = '$username'
    AND password = '$password'
li-query($db,$q);
ysqli_fetch-assoc($r);
$user['id']))

 "Login OK";


 "Login Fail";
