<!DOCTYPE html>
<html>
<head>
<title>
What Is Your Personality Type?: Quiz Basket Fun Quizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
<script>
function validateForm() {
    var x = document.forms["myForm"]["fnamea"].value;
    if (x == null || x == "") {
        alert("This must be filled out");
        return false;
    }

var y = document.forms["myForm"]["fresulta"].value;
    if (y == null || y == "") {
        alert("Result must be filled out");
        return false;
    }

var z = document.forms["myForm"]["fcommenta"].value;
    if (z == null || z == "") {
        alert("Comment must be filled out");
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
<?php
$v1=0;
?>

<?php
if (array_key_exists('s', $_GET)) {
   $description1 = join (" ", $_GET['attributes1']);
if($description1=="a")
{$v1=$v1+1;}
}

if (array_key_exists('s', $_GET)) {
   $description2 = join (" ", $_GET['attributes2']);
if($description2=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description3 = join (" ", $_GET['attributes3']);
if($description3=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description4 = join (" ", $_GET['attributes4']);
if($description4=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description5 = join (" ", $_GET['attributes5']);
if($description5=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description6 = join (" ", $_GET['attributes6']);
if($description6=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description7 = join (" ", $_GET['attributes7']);
if($description7=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description8 = join (" ", $_GET['attributes8']);
if($description8=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description9 = join (" ", $_GET['attributes9']);
if($description9=="a")
{$v1=$v1+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description10 = join (" ", $_GET['attributes10']);
if($description10=="a")
{$v1=$v1+1;}
 }


if($v1<5)
{
echo "<h1>";
echo " Your Score Is ";
echo $v1;
echo " </h1>";
echo "<br>";

echo "<font size=+2> Very poor. You should gather some knowledge. At least it'll be helpful for BCS. </font>";
}

if($v1>5)
{ 
 echo "<h1>";
echo "Your Score Is ";
echo $v1;
echo "</h1>";
echo "<br>";

echo "<font size=+2> Impressive. You know more than most of the people.</font>";
}

if($v1==5)
{
echo "<h1>";
echo "Your Score Is ";
echo $v1;
echo"</h1>";
echo "<br>";

echo "<font size=+2> Average. Can't say bad but also can't say good. </font>";
}
?>

<br> <br> <br>
		<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>Name: <input type="text" name="fname"></td>
<td>Result: <input type="text" name="fresult"></td>
<td>Comment: <input type="text" name="fcomment"></td>
</tr>
<tr><td></td><td></td>
<td align="right"><input type="submit" value="Submit"></td>
</tr></table>
</form>

<?php

include("dbconb.php"); 

$sqlb="INSERT INTO Per (fname, fresult, fcomment)
VALUES
('$_POST[fname]','$_POST[fresult]','$_POST[fcomment]')";

if (!mysql_query($sqlb,$conb))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conb)
?>


<?php
include("dbconb.php"); 

$result = mysql_query("SELECT * FROM Per");

echo "<table border='0'>
<tr>
<th><pre>Name                               </pre></th>
<th><pre>Result                               </pre></th>
<th><pre>Comment                             </pre></th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['fresult'] . "</td>";
echo"<td>".$row['fcomment']."</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($conb);
?>

<br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</div>
</center>

</body>
</html>