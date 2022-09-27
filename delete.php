<?php
include("dbcon.php"); 

$sql="DELETE FROM Persons WHERE FirstName='$_POST[firstname]'";

if (!mysql_query($sql,$con))
  {
echo "1 record deleted";
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>