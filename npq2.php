<html>
<head>
<title>
Create Quiz: Quiz Basket Fun Quizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" href="B.png">
</head>
<body>

<br><br>
 <font size=+5>Do you wanna add another question?</font>
 <br><br><center><a href="npq3.php">
 <div class="mu1">
 <font size=+4><b>Yes</b></font>
 </div></a>
 <a href="book.php">
 <div class="mu2">
 <font size=+4><b>No</b></font>
 </div></a></center>



<?php

include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ques)
VALUES
('$_POST[ques]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj)
?>

<?php
 $v1=0; $v2=0; $v3=0; $v4=0; $v5=0; $v6=0;
 $v1=$_POST['sel1']; $v2=$_POST['sel2']; $v3=$_POST['sel3']; $v4=$_POST['sel4']; $v5=$_POST['sel5']; $v6=$_POST['sel6'];

 if ($v1=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans1)
VALUES
('$_POST[op1]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v2=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans2)
VALUES
('$_POST[op1]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v3=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans3)
VALUES
('$_POST[op1]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v4=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans4)
VALUES
('$_POST[op1]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v5=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans5)
VALUES
('$_POST[op1]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v6=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans6)
VALUES
('$_POST[op1]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 
 
 $v21=0; $v22=0; $v23=0; $v24=0; $v25=0; $v26=0;
 $v21=$_POST['sel21']; $v22=$_POST['sel22']; $v23=$_POST['sel23']; $v24=$_POST['sel24']; $v25=$_POST['sel25']; $v26=$_POST['sel26'];

 if ($v21=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans1)
VALUES
('$_POST[op2]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v22=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans2)
VALUES
('$_POST[op2]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v23=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans3)
VALUES
('$_POST[op2]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v24=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans4)
VALUES
('$_POST[op2]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v25=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans5)
VALUES
('$_POST[op2]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v26=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans6)
VALUES
('$_POST[op2]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 
 
 
 
 $v31=0; $v32=0; $v33=0; $v34=0; $v35=0; $v36=0;
 $v31=$_POST['sel31']; $v32=$_POST['sel32']; $v33=$_POST['sel33']; $v34=$_POST['sel34']; $v35=$_POST['sel35']; $v36=$_POST['sel36'];

 if ($v31=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans1)
VALUES
('$_POST[op3]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v32=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans2)
VALUES
('$_POST[op3]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v33=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans3)
VALUES
('$_POST[op3]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v34=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans4)
VALUES
('$_POST[op3]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v35=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans5)
VALUES
('$_POST[op3]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v36=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans6)
VALUES
('$_POST[op3]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 
 
 
 
 $v41=0; $v42=0; $v43=0; $v44=0; $v45=0; $v46=0;
 $v41=$_POST['sel41']; $v42=$_POST['sel42']; $v43=$_POST['sel43']; $v44=$_POST['sel44']; $v45=$_POST['sel45']; $v46=$_POST['sel46'];

 if ($v41=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans1)
VALUES
('$_POST[op4]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v42=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans2)
VALUES
('$_POST[op4]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v43=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans3)
VALUES
('$_POST[op4]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v44=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans4)
VALUES
('$_POST[op4]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v45=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans5)
VALUES
('$_POST[op4]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v46=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans6)
VALUES
('$_POST[op4]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 
 
 
 $v51=0; $v52=0; $v53=0; $v54=0; $v55=0; $v56=0;
 $v51=$_POST['sel51']; $v52=$_POST['sel52']; $v53=$_POST['sel53']; $v54=$_POST['sel54']; $v55=$_POST['sel55']; $v56=$_POST['sel56'];

 if ($v51=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans1)
VALUES
('$_POST[op5]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v52=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans2)
VALUES
('$_POST[op5]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v53=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans3)
VALUES
('$_POST[op5]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v54=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans4)
VALUES
('$_POST[op5]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v55=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans5)
VALUES
('$_POST[op5]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v56=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans6)
VALUES
('$_POST[op5]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 
 
 
 
 $v61=0; $v62=0; $v63=0; $v64=0; $v65=0; $v66=0;
 $v61=$_POST['sel61']; $v62=$_POST['sel62']; $v63=$_POST['sel63']; $v64=$_POST['sel64']; $v65=$_POST['sel65']; $v66=$_POST['sel66'];

 if ($v61=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans1)
VALUES
('$_POST[op6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v62=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans2)
VALUES
('$_POST[op6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v63=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans3)
VALUES
('$_POST[op6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v64=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans4)
VALUES
('$_POST[op6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v65=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans5)
VALUES
('$_POST[op6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
 
 if ($v66=='02')
 {
	 include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (ans6)
VALUES
('$_POST[op6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj);
 }
  
 ?>
 
 
 
<br><br><br><br><br><br><br><br><br><br><br><br>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>