<?php
include("dbcon.php"); 

$sql="UPDATE Persons SET LastName = '$_POST[lastname]' WHERE FirstName='$_POST[firstname]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record updated";

mysql_close($con)
?>