<html>
<head>
<title>
Login: Quiz Basket 
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
</head>
<body>
 <?php
session_start();
include("dbcone.php"); 
if (isset($_POST['name'])){
$username=$_POST['name'];
$password=$_POST['pswrd'];
$check=$_POST['check'];
if (!$_POST['name'] | !$_POST['pswrd'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='login.html'
        </SCRIPT>");
exit();
     }
$sqle= mysql_query("SELECT * FROM Acc WHERE name= '$username' AND pswrd= '$password' ");
if(mysql_num_rows($sqle) > 0)
{
	
$_SESSION['name']=$username;

if ($username=='Clitoria')
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='book1.php'
        </SCRIPT>");
exit();
}

else
{echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesfully!.')
        window.location.href='book.php'
        </SCRIPT>");
exit();
}

if($check)
setcookie("name",$_SESSION['name'],time()+3600);


}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='login.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>

<?php
if (isset($_COOKIE["name"])){
  echo "Welcome " . $_COOKIE["name"] . "!<br />";
  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='book.php'
        </SCRIPT>");
exit();
}
?>

<br><br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
						<font size=+3><label><strong>Username:</strong></label>
						<input id="name" name="name" type="text"><br><br>
						<label><strong>Password :</strong></label>
						<input id="password" name="pswrd" type="password"><br></font><br>
						<input type="checkbox" name="check">Keep me logged in<br><br>
						<input name="submit" type="submit" value=" Login ">
</form>
</body>
</html>

