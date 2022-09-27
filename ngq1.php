<?php

include("dbconm.php"); 

$sqlm="INSERT INTO Guiz (name, ques)
VALUES
('$_POST[name]','$_POST[ques]')";

if (!mysql_query($sqlm,$conm))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conm)
?>

<html>
<head>
<title>
Create Quiz: Quiz Basket Fun Quizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
<script>
function validateForm() {
    var x = document.forms["Form"]["ques"].value;
    if (x == null || x == "") {
        alert("Question must be filled out");
        return false;
    }

var y = document.forms["Form"]["ans"].value;
    if (y == null || y == "") {
        alert("Answers must be given");
        return false;
    }

}
</script>
</head>
<body>
<div class="kin">
<br><br>
<p>Now that you have successfully submitted quiz name, now it's time to set questions and their respective answers.<br><br>
 
 <form action="ngq2.php" method="post">
 <div class="ana"><center><br><br>
Question:<input type="text" name="ques"><br><br>
Answer:<input type="text" name="ans"><br><br>
<input type="submit"  value="Submit"/><br><br></center></div>
</form>



</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>