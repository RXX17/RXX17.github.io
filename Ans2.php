<!DOCTYPE html>
<html>
<head>
<title>
Which Disney Princess Are You?: Quiz Basket Fun Quizzes
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
<br> <br><center>

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
{$v2=$v2+1;
$v3=$v3+1;}
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
{$v1=$v1+1;
$v3=$v3+1;}
if($description7=="b")
{$v2=$v2+1;
$v5=$v5+1;}
if($description7=="d")
{$v4=$v4+1;}
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

$at=array("$v1","$v2","$v3","$v4","$v5","$v6");
$t=0; $r=0;
for($i=0;$i<6;$i++)
{ if($t<$at[$i])
{$t=$at[$i];
$r=$i+1;
}}

if($r==1)
{
echo "<h1> Florian</h1>";
echo "<img src='Q21.jpg' height=600 width=800>";
echo "<br>";

echo "<font size=+2>Prince of Snow White. You are the most romantic prince. </font>";
}

if($r==2)
{ 
echo "<h1> Phillip </h1>";
 echo "<img src='Q22.jpg' height=600 width=800>";
echo "<br>";

echo "<font size=+2>Prince of Sleeping Beauty. Adventurous, romantic and mostly, BRAVE. You can even defeat a Dragon!!.</font>";
}

if($r==3)
{
 echo "<h1> Charming</h1>";
echo "<img src='Q23.jpg' height=600 width=800>";
echo "<br>";

echo "<font size=+2>Prince Charming!!! Sophisticated and an ideal prince. </font>";
}

if ($r==4)
{
 echo "<h1> Beast </h1>";
echo "<img src='Q24.jpg' height=600 width=800>";
echo "<br>";

echo "<font size=+2> Angry, strong, proud. But your anger will cause a lot of trouble. What would you do without Belle?</font>";
}

if($r==5)
{ 
 echo "<h1> Eric </h1>";
echo "<img src='Q25.png' height=600 width=800>";
echo "<br>";

echo "<font size=+2> Curious! You seek for adventure. You want to know about everything in this world.</font>";
}

if($r==6)
{
 echo "<h1> Aladdin</h2>";
echo "<img src='Q16.jpg' height=600 width=800>";
echo "<br>";

echo "<font size=+2> Magic! You are surrounded by it. And by the way, where is Genie?</font>";
}
?>
</center>

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

include("dbcond.php"); 

$sqld="INSERT INTO Personsd (fname, fresult, fcomment)
VALUES
('$_POST[fname]','$_POST[fresult]','$_POST[fcomment]')";

if (!mysql_query($sqld,$cond))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($cond)
?>

<?php
include("dbcond.php"); 

$result = mysql_query("SELECT * FROM Personsd");

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

mysql_close($cond);
?>

<br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</div>
</body>
</html>