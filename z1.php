<?php
include("dbcone.php"); 
// Grab User submitted information
$email = $_POST["name"];
$pass = $_POST["pswrd"];

// Connect to the database
$cone = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $cone)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("my_quie",$cone);

$result = mysql_query("SELECT pswrd FROM Acc WHERE name= $email");

$row = mysql_fetch_row($result);

if($row["pswrd"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>
<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="name"></td></tr>
<tr>
<td>Password:</td><td> <input type="text" name="pswrd"></td></tr>
<tr>
<td align="right"><input type="submit"  name="s" value="Submit"></td>
</tr></table>
</form>