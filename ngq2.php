<html>
<head>
<title>
Create Duiz: Duiz Basket Fun Duizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
</head>
<body>

<br><br>
 <font size=+5>Do you wanna add another question?</font>
 <br><br><center><a href="ngq3.php">
 <div class="mu1">
 <font size=+4><b>Yes</b></font>
 </div></a>
 <a href="book.php">
 <div class="mu2">
 <font size=+4><b>No</b></font>
 </div></a></center>



<?php

include("dbconm.php"); 

$sqlm="INSERT INTO Guiz (ques)
VALUES
('$_POST[ques]')";

if (!mysql_query($sqlm,$conm))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conm)
?>
 
 
 
<br><br><br><br><br><br><br><br><br><br><br><br>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>