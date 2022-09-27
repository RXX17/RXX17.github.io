<?php

include("dbcon.php"); 

$sql="INSERT INTO Persons (firstName, lastName)
VALUES
('$_POST[firstname]','$_POST[lastname]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>

<?php
include("dbcon.php"); 

$result = mysql_query("SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Comment</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>

<form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="name"></td></tr>
<tr>
<td>Password:</td><td> <textarea rows="30"  cols="20" name="pswrd"></textarea></td></tr>
<tr>
<td align="right"><input type="submit"  name="s" value="Submit"></td>
</tr></table>
</form>

