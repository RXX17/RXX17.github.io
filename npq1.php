<?php
$a1=0; $a2=0; $a3=0; $a4=0; $a5=0; $a6=0;
$a1=$_POST['ans1']; $a2=$_POST['ans2']; $a3=$_POST['ans3']; $a4=$_POST['ans4']; $a5=$_POST['ans5']; $a6=$_POST['ans6'];
include("dbconj.php"); 

$sqlj="INSERT INTO Quiz (name, ques, ans1, ans2, ans3, ans4, ans5, ans6)
VALUES
('$_POST[name]','$_POST[ques]','$_POST[ans1]','$_POST[ans2]','$_POST[ans3]','$_POST[ans4]','$_POST[ans5]','$_POST[ans6]')";

if (!mysql_query($sqlj,$conj))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($conj)
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

var y = document.forms["Form"]["op1"].value;
    if (y == null || y == "") {
        alert("At least one option must be given");
        return false;
    }

}
</script>
</head>
<body>
<div class="kin">
<br><br>
<p>Now that you have successfully submitted quiz name and answers, now it's time to set questions and their respective answers.<br>
<br> You can select multiple answers for an option. Maximum 6 options can be considered.<br>
After entering question and option, select 0 for the answers not related to the option and 1 for the answers related.<br><br>
In case you forget.......<br><br>
<font size=+2>Here is your answers:</font><br>

<?php
echo "Answer1=";
echo $a1;
echo "  <br> ";
echo "Answer2=";
echo $a2;
echo "  <br> ";
echo "Answer3=";
echo $a3;
echo "  <br> ";
echo "Answer4=";
echo $a4;
echo "  <br> ";
echo "Answer5=";
echo $a5;
echo "  <br> ";
echo "Answer6=";
echo $a6;
echo "  <br> ";
?>

<br>
 <form action="npq2.php" method="post">
 <center><div class="ans"><br>
Question:<input type="text" name="ques"  size=40></div><br>

<div class="ans1"><br>
Option1:<input type="text" name="op1"><br><br>
Answer1:<select name="sel1"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer2:<select name="sel2"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer3:<select name="sel3"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer4:<select name="sel4"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer5:<select name="sel5"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer6:<select name="sel6"> <option value=01>0</option> <option value=02>1</option> </select></div><br>

<div class="ans2"><br>
Option2:<input type="text" name="op2"><br><br>
Answer1:<select name="sel21"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer2:<select name="sel22"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer3:<select name="sel23"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer4:<select name="sel24"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer5:<select name="sel25"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer6:<select name="sel26"> <option value=01>0</option> <option value=02>1</option> </select></div><br>

<div class="ans3"><br>
Option3:<input type="text" name="op3"><br><br>
Answer1:<select name="sel31"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer2:<select name="sel32"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer3:<select name="sel33"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer4:<select name="sel34"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer5:<select name="sel35"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer6:<select name="sel36"> <option value=01>0</option> <option value=02>1</option> </select></div><br>

<div class="ans4"><br>
Option4:<input type="text" name="op4"><br><br>
Answer1:<select name="sel41"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer2:<select name="sel42"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer3:<select name="sel43"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer4:<select name="sel44"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer5:<select name="sel45"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer6:<select name="sel46"> <option value=01>0</option> <option value=02>1</option> </select></div><br>

<div class="ans5"><br>
Option5:<input type="text" name="op5"><br><br>
Answer1:<select name="sel51"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer2:<select name="sel52"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer3:<select name="sel53"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer4:<select name="sel54"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer5:<select name="sel55"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer6:<select name="sel56"> <option value=01>0</option> <option value=02>1</option> </select></div><br>

<div class="ans6"><br>
Option6:<input type="text" name="op6"><br><br>
Answer1:<select name="sel61"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer2:<select name="sel62"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer3:<select name="sel63"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer4:<select name="sel64"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer5:<select name="sel65"> <option value=01>0</option> <option value=02>1</option> </select><br>
Answer6:<select name="sel66"> <option value=01>0</option> <option value=02>1</option> </select></div><br></center>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<div class="hay"><center><br>
<input type="submit"  value="Submit"/><br><br></center></div>
</form>
</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<p class="gy">copyright@clitoria_ternatea_QBAFQ1017.......all rights reserved
</center>
</body>
</html>