<?php
$username = "username";
$password = "password";
if(($_POST['PHP_AUTH_USER'] == $username)&& ($_POST['PHP_AUTH_PW'] == $password))
{
echo apache_setenv("PHP_AUTH_USER",$username);
echo apache_setenv("PHP_AUTH_PW",$password);
echo putenv("PHP_AUTH_USER =$username");
echo putenv("PHP_AUTH_PW = $password");
$PHP_AUTH_USER =$username;
$PHP_AUTH_PW = $password;
$_SERVER['PHP_AUTH_USER'] =$username;
$_SERVER['PHP_AUTH_PW'] = $password;
}
?>
<html>
<head>
</head>
<body>
<form method="post">
<p>Username : <input type="textbox" name="PHP_AUTH_USER" id="PHP_AUTH_USER" /><br />
<p>Password : <input type="password" name="PHP_AUTH_PW" id="PHP_AUTH_PW" /><br />
<p> <input type="submit" name="submit" />
</form>
<?php

include("dbconb.php"); 

$sqlb="INSERT INTO Per (ffname, fpswrd)
VALUES
('$_POST[PHP_AUTH_USER]','$_POST[PHP_AUTH_PW]')";

if (!mysql_query($sqlb,$conb))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($conb)
?>
</body>
</html>
