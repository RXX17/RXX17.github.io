<html>
<head>
<title>practice</title>
</head>
<body>

<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<table>
Answer1:<input type="checkbox" name="a1[]" value="a"><br>
Answer2:<input type="checkbox" name="a1[]" value="b"><br>
Answer3:<input type="checkbox" name="a1[]" value="c"><br>
Answer4:<input type="checkbox" name="a1[]" value="d"><br>
Answer5:<input type="checkbox" name="a1[]" value="e"><br>
Answer6:<input type="checkbox" name="a1[]" value="f"><br><br>
<input type="submit" name="s" value="Submit">
</form>

<?php
$v1=0;
if (array_key_exists('s', $_GET)) {
   $description1 = join (" ", $_GET['a1']);
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
 echo $v1;
 ?>
 
 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
Answer1:<select name="sel1">
<option value=01>0</option>
<option value=02>1</option>
</select><br>
Answer2:<select name="sel2">
<option value=01>0</option>
<option value=02>1</option>
</select><br>
<input type="submit" />
</form>
 
 <?php
 $v1=0; $v2=0;
 $v1=$_POST['sel1'];
 $v2=$_POST['sel2'];
 echo $v1;
 echo " ".$v2;
 if ($v1=='02')
 {
	 $v3=111;
 }
 echo "v3 ".$v3;
 ?>


</body>
</html>