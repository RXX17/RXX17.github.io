<html>
<head>
<title>
Create Quiz: Quiz Basket Fun Quizzes
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

var y = document.forms["Form"]["ques"].value;
    if (y == null || y == "") {
        alert("Quiz name must be filled out");
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
<td bgcolor="#00afff"> Create your own quiz!<br>
<center><a href="Acc.php"><div class="mu">Create</div></a></td></tr></table></center>
<br><br>
</aside>

<div class="kin">
<p><font size=+2>Welcome! </font><br>
Here is your chance to create your own quiz. First you need to submit your name, quiz name and answers. Maximum 6 answers can be considered.
<br><br><font size=+2>Create Your Own Quiz</font>

<form name="Form" action="ngq1.php" onsubmit="return validateForm()" method="post">
<center><div class="ana"><br><br><br><br>
Your Name: <input type="text" name="name" size=40><br><br>
Quiz Name: <input type="text" name="ques" size=40><br><br>
<input type="submit" value="Submit"></div></center>
</form>



</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>
