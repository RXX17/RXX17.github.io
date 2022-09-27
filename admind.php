<?php
include("dbconk.php"); 

$resultk = mysql_query("SELECT * FROM Duiz");

echo "<table border='0'>
<tr>
<th><pre>Name</pre></th>
<th><pre>Qestion</pre></th>
<th><pre>answer1</pre></th>
<th><pre>answer2</pre></th>
<th><pre>answer3</pre></th>
<th><pre>answer4</pre></th>
<th><pre>answer5</pre></th>
<th><pre>answer6</pre></th>
</tr>";

while($row = mysql_fetch_array($resultk))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['ques'] . "</td>";
  echo "<td>" . $row['ans1'] . "</td>";
  echo "<td>" . $row['ans2'] . "</td>";
  echo "<td>" . $row['ans3'] . "</td>";
  echo "<td>" . $row['ans4'] . "</td>";
  echo "<td>" . $row['ans5'] . "</td>";
  echo "<td>" . $row['ans6'] . "</td>";
  echo "</tr>";
  }
echo "<hr></table>";

mysql_close($conk);
?>