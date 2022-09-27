<html>
<head>
<title>
How Much Do You Know About World?: Quiz Basket Fun Quizzes
</title>
<script src="zzz.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="cpBtn" onclick="togglecp()">
<div></div>
<div></div>
<div></div>
</div>

<div id="cp"></div>
</div>
<center>
<marquee behavior="alternate" direction="up" width=65% height=39%><marquee direction="right" behavior="alternate"><br>
<img src="C.png"><br> <br> </marquee></marquee> </center>
<marquee behavior="alternate"> <b>Awesome Fun Quizzes! Try Now!!</b> </marquee>
<br> <hr>
<pre class="nu">             <a href="Hume.php"> Home </a>                          <a href="Quiz.php"> Quizzes </a>                     <a href="List.php"> Reviews </a>                      <a href="Acc.php"> Create </a>                     <a href="Cont.php"> Contacts </a> </pre>
</center><br><br>
<aside class="ki">
  <font size=+2>Follow Us On</font><br>
  <img src="BB.png" width=200 height=70>
</aside>

<div class="kin">
<center><font size=+5 color="#0000ff"><b> How Much Do You Know About World?</b></font></center>
<p>Let's check if you keep yourself updated or not.

<form action=<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
	<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
	<tbody><tr><td>
	<input name="uploadedimage" type="file">
	</td></tr>
	<tr><td>
	<input name="Upload Now" type="submit" value="Upload Image">
	</td></tr>
	</tbody></table>
	</form>

	<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');
?>

<?php

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO testblob VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);

?>

<?php

header("content-type:image/jpeg");

$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');

$name=$_GET['name'];

$select_image="select * from testblob where imagename='$name'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
    $image_name=$row["imagename"];
    $image_content=$row["imagecontent"];
}
echo $image;
?>

<br><br></div>
<center>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>