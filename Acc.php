<?php
error_reporting(0);
?>

<html>
<head>
<title>
Books' Review: Quiz Basket Fun Quizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("First Name must be filled out");
        return false;
    }

var y = document.forms["myForm"]["lname"].value;
    if (y == null || y == "") {
        alert("Last Name must be filled out");
        return false;
    }

var z = document.forms["myForm"]["pswrd"].value;
    if (z == null || z == "") {
        alert("Password must be filled out");
        return false;
    }
	if (z.length<8)
	{ alert ("Password too short");
      return false;
	}
	if (z.length>32)
	{ alert ("Password too length");
      return false;
	}

var l = document.forms["myForm"]["rpswrd"].value;
    if (l == null || l == "") {
        alert("You Must Confirm Password");
        return false;
    }

var m = document.forms["myForm"]["name"].value;
    if (m == null || m == "") {
        alert("Name Must Be Filled Out");
        return false;
    }

}


</script>
</head>
<body>
<center>
<marquee behavior="alternate" direction="up" width=65% height=39%><marquee direction="right" behavior="alternate"><br>
<img src="C.png"><br> <br> </marquee></marquee> </center>
<marquee behavior="alternate"> <b>Awesome Fun Quizzes! Try Now!!</b> </marquee>
<br> <hr>
<pre class="nu">             <a href="Hume.php"> Home </a>                          <a href="Quiz.php"> Quizzes </a>                     <a href="List.php"> Reviews </a>                   <a href="login.php"> Workshop </a>                        <a href="Cont.php"> FAQ</a> </pre>
</center>

<aside class="koi">
<table border="1">
<tr>
  <td  bgcolor="#aaaaaa"><font size=+2>Follow Us On</font><br>
 <pre> <a href="https://www.facebook.com/profile.php?id=100009407548751"> <img src="BB1.png" width=40 height=40></a> <a href="https://twitter.com/Clitoriaternat1"><img src="BB2.png" width=40 height=40></a> <a href="https://myaccount.google.com/?utm_source=OGB&pli=1"><img src="BB3.png" width=40 height=40></a> <a href="https://instagram.com/clitoriaternatea/"><img src="BB4.png" width=40 height=40></a>   
</td></tr></table><br>
<table border="1">
<tr>
<td bgcolor="#0000ff"> Create your own quiz!<br>
<center><a href="Acc.php"><div class="mu">Create</div></a></td></tr></table></center>
</aside>

<div class="kin">
<br><br>
<p> Here is your chance to create your own quiz. Become a member of this website and create new quizzes, add reviews of books, and many more.
<br><br>
<font size=+3>Sign Up</font>
<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>First Name:</td><td> <input type="text" name="fname"></td>
<td>Last Name:</td><td> <input type="text" name="lname"></td></tr>
<tr>
<td>Username:</td>
<td><input type="text" name="name"></td></tr>
<tr>
<td>Date of Birth:</td>
<td> <select name="Month">
<option>January </option>
<option>February </option>
<option>March </option>
<option>April </option>
<option>May </option>
<option>June </option>
<option>July </option>
<option>August </option>
<option>September </option>
<option>October </option>
<option>November </option>
<option>December </option>
</select></td>
<td><select name="date">
<option value=01>01</option>
<option value=02>02</option>
<option value=03>03</option>
<option value=04>04</option>
<option value=05>05</option>
<option value=06>06</option>
<option value=07>07</option>
<option value=08>08</option>
<option value=09>09</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
<option value=21>21</option>
<option value=22>22</option>
<option value=23>23</option>
<option value=24>24</option>
<option value=25>25</option>
<option value=26>26</option>
<option value=27>27</option>
<option value=28>28</option>
<option value=29>29</option>
<option value=30>30</option>
<option value=31>31</option>
</select></td>
<td><select name="Year">
<option>1990 </option>
<option>1991 </option>
<option>1992 </option>
<option>1993 </option>
<option>1994 </option>
<option>1995 </option>
<option>1996 </option>
<option>1997 </option>
<option>1998 </option>
<option>1999 </option>
<option>2000 </option>
<option>2001 </option>
<option>2002 </option>
<option>2003 </option>
<option>2004 </option>
<option>2005 </option>
<option>2006 </option>
<option>2007 </option>
<option>2008 </option>
<option>2009 </option>
<option>2010 </option>
<option>2011 </option>
<option>2012 </option>
<option>2013 </option>
<option>2014 </option>
<option>2015 </option>
</select></td>
</tr>
<tr>
<td>Gender:</td>
<td><select name="Gender">
<option>Male</option>
<option>Female</option>
</select></td>
</tr>
<tr>
<td>Password:</td><td> <input type="password" name="pswrd"><br>
<font size="2">Password must be within 8 to 32 characters</font></td></tr>
<tr>
<td>Confirm Password:</td><td> <input type="password" name="rpswrd"></td></tr>
<tr><td></td><td></td><td></td>
<td align="right"><input type="submit"  name="s" value="Submit"></td>
</tr></table>
</form>

<?php

$get1=$_POST['pswrd'];
$get2=$_POST['rpswrd'];

if($get1==$get2)
{ 
echo "Hay hay";
}
else
{echo "Password Didn't Match";}

?>

<?php

include("dbcone.php"); 

$sqle="INSERT INTO Acc (name, pswrd)
VALUES
('$_POST[name]','$_POST[pswrd]')";

if (!mysql_query($sqle,$cone))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($cone)
?>

</div>
<br><br><br><br><br><br><br><br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>






