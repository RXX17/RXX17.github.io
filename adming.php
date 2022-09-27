<?php
include("dbconm.php");  

$resultm = mysql_query("SELECT * FROM Guiz");

echo "<table border='0'>
<tr>
<th><pre>Name</pre></th>
<th><pre>Qestion</pre></th>
<th><pre>answer1</pre></th>
</tr>";

while($row = mysql_fetch_array($resultm))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['ques'] . "</td>";
  echo "<td>" . $row['ans1'] . "</td>";
  echo "</tr>";
  }
echo "<hr></table>";

mysql_close($conm);
?>