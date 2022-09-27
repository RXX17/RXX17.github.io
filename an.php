<html>
<head>
<title>
Answer: Quiz Basket Fun Quizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
<script>
function validateForm() {
	
var a = document.forms["Form"]["nameq"].value;
    if (a == null || a == "") {
        alert("Name of the questioner must be filled out");
        return false;
    }

var b = document.forms["Form"]["ans"].value;
    if (b == null || b == "") {
        alert("Please add your answer");
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
<div class="q1">
<?php
include("dbcong.php"); 

$resultg = mysql_query("SELECT * FROM Ans");

echo "<table border='0'>
<tr>
<th><pre>Name</pre></th>
<th><pre>Qestion</pre></th>
</tr>";

while($row = mysql_fetch_array($resultg))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['ques'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($cong);
?></div>
<br><br>
</aside>

<div class="kin">
<br><br>
<p> No one should have any question about us! So quickly answer those questions. You'll get a list of unanswered questions on the right side.
Just write the name of who asked it and answer politely. Don't use any offensive language or anything that might hurt soneone.
<br><br>
<font size=+3>Answer the Questions Here:</font>

		<form name="Form" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<div class="ans"><br><br>
Name of the questioner: <input type="text" name="nameq"><br><br>
Your answer: <input type="text" name="ans"><br><br>
<input type="submit" value="Submit"></div>
</form>

<?php
include("dbconh.php"); 

$sqlh="UPDATE Ques SET answer = '$_POST[ans]' WHERE name='$_POST[nameq]'";

if (!mysql_query($sqlh,$conh))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record updated";

mysql_close($conh)
?>

<?php
include("dbcong.php"); 

$sqlg="DELETE FROM Ans WHERE name='$_POST[nameq]'";

if (!mysql_query($sqlg,$cong))
  {
echo "1 record deleted";
  die('Error: ' . mysql_error());
  }

mysql_close($cong)
?>

</div>
<br><br><br><br><br><br><br><br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>