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
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("This must be filled out");
        return false;
    }

var y = document.forms["myForm"]["fresult"].value;
    if (y == null || y == "") {
        alert("Result must be filled out");
        return false;
    }

var z = document.forms["myForm"]["fcomment"].value;
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
<br> <br>

<?php
$v=0;$v1=0;$v2=0;$v3=0;$v4=0;$v5=0;$v6=0;
?>

<?php
if (array_key_exists('s', $_GET)) {
   $description1 = join (" ", $_GET['attributes1']);
if($description1=="a")
{$v1=$v1+1;}
if($description1=="b")
{$v2=$v2+1;
$v3=$v3+1;
$v4=$v4+1;}
if($description1=="e")
{$v5=$v5+1;}
if($description1=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description2 = join (" ", $_GET['attributes2']);
if($description2=="a")
{$v1=$v1+1;}
if($description2=="b")
{$v2=$v2+1;}
if($description2=="c")
{$v3=$v3+1;}
if($description2=="d")
{$v4=$v4+1;}
if($description2=="e")
{$v5=$v5+1;}
if($description2=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description3 = join (" ", $_GET['attributes3']);
if($description3=="a")
{$v1=$v1+1;}
if($description3=="b")
{$v2=$v2+1;}
if($description3=="c")
{$v3=$v3+1;}
if($description3=="d")
{$v4=$v4+1;}
if($description3=="e")
{$v5=$v5+1;}
if($description3=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description4 = join (" ", $_GET['attributes4']);
if($description4=="a")
{$v1=$v1+1;}
if($description4=="b")
{$v2=$v2+1;}
if($description4=="c")
{$v3=$v3+1;}
if($description4=="d")
{$v4=$v4+1;}
if($description4=="e")
{$v5=$v5+1;}
if($description4=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description5 = join (" ", $_GET['attributes5']);
if($description5=="a")
{$v1=$v1+1;}
if($description5=="b")
{$v2=$v2+1;}
if($description5=="c")
{$v3=$v3+1;}
if($description5=="d")
{$v4=$v4+1;}
if($description5=="e")
{$v5=$v5+1;}
if($description5=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description6 = join (" ", $_GET['attributes6']);
if($description6=="a")
{$v1=$v1+1;}
if($description6=="b")
{$v2=$v2+1;}
if($description6=="c")
{$v3=$v3+1;}
if($description6=="d")
{$v4=$v4+1;}
if($description6=="e")
{$v5=$v5+1;}
if($description6=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description7 = join (" ", $_GET['attributes7']);
if($description7=="a")
{$v1=$v1+1;}
if($description7=="b")
{$v2=$v2+1;}
if($description7=="c")
{$v3=$v3+1;}
if($description7=="d")
{$v4=$v4+1;}
if($description7=="e")
{$v5=$v5+1;}
if($description7=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description8 = join (" ", $_GET['attributes8']);
if($description8=="a")
{$v1=$v1+1;}
if($description8=="b")
{$v2=$v2+1;}
if($description8=="c")
{$v3=$v3+1;}
if($description8=="d")
{$v4=$v4+1;}
if($description8=="e")
{$v5=$v5+1;}
if($description8=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description9 = join (" ", $_GET['attributes9']);
if($description9=="a")
{$v1=$v1+1;}
if($description9=="b")
{$v2=$v2+1;}
if($description9=="c")
{$v3=$v3+1;}
if($description9=="d")
{$v4=$v4+1;}
if($description9=="e")
{$v5=$v5+1;}
if($description9=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description10 = join (" ", $_GET['attributes10']);
if($description10=="a")
{$v1=$v1+1;}
if($description10=="b")
{$v2=$v2+1;}
if($description10=="c")
{$v3=$v3+1;}
if($description10=="d")
{$v4=$v4+1;}
if($description10=="e")
{$v5=$v5+1;}
if($description10=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description11 = join (" ", $_GET['attributes11']);
if($description11=="a")
{$v1=$v1+1;
$v5=$v5+1;}
if($description11=="b")
{$v2=$v2+1;}
if($description11=="c")
{$v3=$v3+1;}
if($description11=="d")
{$v4=$v4+1;}
if($description11=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description12 = join (" ", $_GET['attributes12']);
if($description12=="a")
{$v1=$v1+1;
$v3=$v3+1;
$v4=$v4+1;}
if($description12=="b")
{$v2=$v2+1;
$v5=$v5+1;}
if($description12=="f")
{$v6=$v6+1;}
 }

if (array_key_exists('s', $_GET)) {
   $description13 = join (" ", $_GET['attributes10']);
if($description13=="a")
{$v1=$v1+1;}
if($description13=="b")
{$v2=$v2+1;}
if($description13=="c")
{$v3=$v3+1;}
if($description13=="d")
{$v4=$v4+1;}
if($description13=="e")
{$v5=$v5+1;}
if($description13=="f")
{$v6=$v6+1;}
 }


$at=array("$v1","$v2","$v3","$v4","$v5","$v6");
$t=0; $r=0;
for($i=0;$i<6;$i++)
{ if($t<$at[$i])
{$t=$at[$i];
$r=$i+1;
}}

if($r==1)
{
echo "<h1> Sweet Sharmi</h1>";
echo "<img src='Q1.jpg'>";
echo "<br>";

echo "<font size=+2> Always sweet talks! How do you control your anger? Or are you afraid of someone getting hurt? Well beign sweet doesn't mean you can't say the truth. </font>";
}

if($r==2)
{ 
 echo "<h1> Introvert Proma</h1>";
echo "<img src='Q2.jpg'>";
echo "<br>";

echo "<font size=+2> Speak up! If you won't say anything then nobody will understand what you want, or how you feel...... unless you've got Proffesor Xavier!</font>";
}

if($r==3)
{
echo "<h1> Practical Nazifa</h1>";
echo "<img src='Q3.jpg'>";
echo "<br>";

echo "<font size=+2> Perfectly balanced! High CGPA, highly talented......... everybody wants to be like you! You should open a fan page. </font>";
}

if ($r==4)
{
 echo "<h1> Cracked Samira </h1>";
echo "<img src='Q4.jpg'>";
echo "<br>";

echo "<font size=+2> Hello, Hello, Hello! You are one of the most rare kind of human beings in this world. Nice to meet you. Even Samira will be pleased to know. </font>";
}

if($r==5)
{ 
echo "<h1> Simple Shetu </h1>";
echo "<img src='Q5.jpg'>";
echo "<br>";

echo "<font size=+2> Simple and strong.Being simple is not that simple. You should be proud of yourself. </font>";
}

if($r==6)
{
echo "<h1> Dream-merchant Raisa</h2>";
echo "<img src='Q6.jpg'>";
echo "<br>";

echo "<font size=+2>Your imagination runs so fast that you can't keep pace with it in reality. But none's gonna understand. So unless you change yourself, you've got no future. </font>";
}
?>

<br> <br> <br>
		<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>Name: <input type="text" name="fname"></td>
<td>Result: <input type="text" name="fresult"></td></tr>
<tr><td>Comment: <input type="text"  name="fcomment"></td>
</tr>
<tr><td></td>
<td align="right"><input type="submit" value="Submit"></td>
</tr></table>
</form>

<?php

include("dbcona.php"); 

$sqla="INSERT INTO Testa (fname, fresult, fcomment)
VALUES
('$_POST[fname]','$_POST[fresult]','$_POST[fcomment]')";

if (!mysql_query($sqla,$cona))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($cona)
?>


<?php
include("dbcona.php"); 

$resulta = mysql_query("SELECT * FROM Testa");

echo "<table border='0'>
<tr>
<th><pre>Name                               </pre></th>
<th><pre>Result                               </pre></th>
<th><pre>Comment                             </pre></th>
</tr>";

while($row = mysql_fetch_array($resulta))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['fresult'] . "</td>";
echo"<td>".$row['fcomment']."</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($cona);
?>

<br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</div>
</body>
</html>