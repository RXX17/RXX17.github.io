<?php
$cone = mysql_connect('localhost', 'root', '');
if (!$cone)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_quie', $cone);
$sqle="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqle);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());
?>