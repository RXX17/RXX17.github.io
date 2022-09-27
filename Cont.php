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
        alert("First Name must be filled out");
        return false;
    }

var y = document.forms["myForm"]["lname"].value;
    if (y == null || y == "") {
        alert("Last Name must be filled out");
        return false;
    }
	
var z = document.forms["myForm"]["ques"].value;
    if (z == null || z == "") {
        alert("Question must be filled out");
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
<p>If you have any question about this website, please leave a message. We will try to answer as soon as possible.
<br> <br> <br>
<div class="form">
<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
First Name:</td><td> <input type="text" name="fname">
Last Name:</td><td> <input type="text" name="lname">
Question:</td><td> <input type="text" textarea rows="5" cols="10"name="ques" >
<input type="submit"  name="s" value="Submit">
</form>
</div>

<?php

include("dbcong.php"); 

$sqlg="INSERT INTO Ans (name, ques)
VALUES
('$_POST[lname]','$_POST[ques]')";

if (!mysql_query($sqlg,$cong))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($cong)
?>

<?php

include("dbconh.php"); 

$sqlh="INSERT INTO Ques (name, ques)
VALUES
('$_POST[lname]','$_POST[ques]')";

if (!mysql_query($sqlh,$conh))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conh)
?>

<?php
include("dbconh.php"); 

$resulth = mysql_query("SELECT * FROM Ques");

echo "<table border='0'>
<tr>
<th><pre>Name                               </pre></th>
<th><pre>Qestion                              </pre></th>
<th><pre>Answer                            </pre></th>
</tr>";

while($row = mysql_fetch_array($resulth))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['ques'] . "</td>";
echo"<td>".$row['answer']."</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($conh);
?>

<br><br><br>
</div>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</div>
</body>
</html>


