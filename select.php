<?php
include("dbcona.php"); 

$resultb = mysql_query("SELECT * FROM Testa");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Comment</th>
</tr>";

while($row = mysql_fetch_array($resultb))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['fresult'] . "</td>";
echo "<td>" . $row['fcomment'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($cona);
?>