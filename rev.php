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
    var x = document.forms["Form"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }

var y = document.forms["Form"]["writer"].value;
    if (y == null || y == "") {
        alert("Name of the writer must be filled out");
        return false;
    }

var z = document.forms["Form"]["review"].value;
    if (z == null || z == "") {
        alert("Please add your review");
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
<center>
		<form action="logout.php" >
<table >
<tr>
<td align="right"><input type="submit" value="logout"></td>
</tr></table>
</form></div></center>
<table border="1">
<tr>
  <td  bgcolor="#aaaaaa"><font size=+2>Follow Us On</font><br>
 <pre> <a href="https://www.facebook.com/profile.php?id=100009407548751"> <img src="BB1.png" width=40 height=40></a> <a href="https://twitter.com/Clitoriaternat1"><img src="BB2.png" width=40 height=40></a> <a href="https://myaccount.google.com/?utm_source=OGB&pli=1"><img src="BB3.png" width=40 height=40></a> <a href="https://instagram.com/clitoriaternatea/"><img src="BB4.png" width=40 height=40></a>   
</td></tr></table><br>
<table border="1">
<tr>
<td bgcolor="#0000ff"> Create your own quiz!<br>
<center><a href="Acc.php"><div class="mu">Create</div></a></td></tr></table></center>
<br><br>
</aside>

<div class="kin">
<br><br>
<p> Add your review about books. Help people find which book they should read. But don't any offensive language or anything that might hurt people. Otherwise your membership will be cancelled.
<br><br>
<font size=+3>Add Your Reviews Here:</font>
		<form name="Form" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<div class="rev"><br>
Name of the book: <input type="text" name="name"><br><br>
Name of the Writer: <input type="text" name="writer"><br><br>
Your Review: <input type="text" name="review"><br><br>
<input type="submit" value="Submit">
</div>
</form>

<?php

include("dbconf.php"); 

$sqlf="INSERT INTO Rev (name, writer, review)
VALUES
('$_POST[name]','$_POST[writer]','$_POST[review]')";

if (!mysql_query($sqlf,$conf))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conf)
?>

</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>