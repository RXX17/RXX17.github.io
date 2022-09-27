<?php
$conf = mysql_connect('localhost', 'root', '');
if (!$conf)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_rev', $conf);
$sqlf="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlf);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());
?>