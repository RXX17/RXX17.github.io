<?php
$cona = mysql_connect("localhost","root","");
if (!$cona)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_qu', $cona);
$sqla="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqla);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_qu",$cona))
  {
  echo "Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_qu", $cona);
$sqla = "CREATE TABLE Testa
(
fname varchar(15),
fresult varchar(50),
fcomment varchar(500)
)";
echo "Table1 created";


// Execute query
mysql_query($sqla,$cona);

mysql_close($cona);
?>







<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_qui', $con);
$sql="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sql);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_qui",$con))
  {
  echo "Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_qui", $con);
$sql = "CREATE TABLE Persons
(
fname varchar(15),
fresult varchar(50),
fcomment varchar(500)
)";

// Execute query
mysql_query($sql,$con);

mysql_close($con);
?>







<?php
$conb = mysql_connect("localhost","root","");
if (!$conb)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_ac', $conb);
$sqlb="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlb);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_ac",$conb))
  {
  echo "Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_ac", $conb);
$sqlb = "CREATE TABLE Per
(
fname varchar(15),
fresult varchar(50),
fcomment varchar(500)
)";

// Execute query
mysql_query($sqlb,$conb);

mysql_close($conb);
?>






<?php
$conc = mysql_connect("localhost","root","");
if (!$conc)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_co', $conc);
$sqlc="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlc);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_co",$conc))
  {
  echo "Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_co", $conc);
$sqlc = "CREATE TABLE Perc
(
fname varchar(15),
fresult varchar(50),
fcomment varchar(500)
)";

// Execute query
mysql_query($sqlc,$conc);

mysql_close($conc);
?>






<?php
$cond = mysql_connect("localhost","root","");
if (!$cond)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_quid', $cond);
$sqld="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqld);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_quid",$cond))
  {
  echo "Database created quid<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_quid", $cond);
$sqld = "CREATE TABLE Personsd
(
fname varchar(100),
fresult varchar(50),
fcomment varchar(500)
)";

// Execute query
mysql_query($sqld,$cond);

mysql_close($cond);
?>

<?php
$cone= mysql_connect("localhost","root","");
if (!$cone)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_quie', $cone);
$sqle="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqle);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_quie",$cone))
  {
  echo "Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_quie", $cone);
$sqle= "CREATE TABLE Acc
(
name varchar(100),
pswrd varchar(32)
)";

// Execute query
mysql_query($sqle,$cone);

mysql_close($cone);
?>

<?php
$conf= mysql_connect("localhost","root","");
if (!$conf)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_rev', $conf);
$sqlf="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlf);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_rev",$conf))
  {
  echo "<br>Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_rev", $conf);
$sqlf= "CREATE TABLE Rev
(
name varchar(200),
writer varchar(100),
review varchar(500)
)";

// Execute query
mysql_query($sqlf,$conf);

mysql_close($conf);
?>

<?php
$cong= mysql_connect("localhost","root","");
if (!$cong)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_ans', $cong);
$sqlg="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlg);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_ans",$cong))
  {
  echo "<br>Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_ans", $cong);
$sqlg= "CREATE TABLE Ans
(
name varchar(200),
ques varchar(500),
answer varchar(500)
)";

// Execute query
mysql_query($sqlg,$cong);

mysql_close($cong);
?>

<?php
$conh= mysql_connect("localhost","root","");
if (!$conh)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_ques', $conh);
$sqlh="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlh);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_ques",$conh))
  {
  echo "<br>Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_ques", $conh);
$sqlh= "CREATE TABLE Ques
(
name varchar(200),
ques varchar(500),
answer varchar(500)
)";

// Execute query
mysql_query($sqlh,$conh);

mysql_close($conh);
?>

<?php
$conj= mysql_connect("localhost","root","");
if (!$conj)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_iz', $conj);
$sqlj="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlj);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_iz",$conj))
  {
  echo "<br>Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_iz", $conj);
$sqlj= "CREATE TABLE Quiz
(
name varchar(200),
ques varchar(500),
ans1 varchar(500),
ans2 varchar(500),
ans3 varchar(500),
ans4 varchar(500),
ans5 varchar(500),
ans6 varchar(500)
)";

// Execute query
mysql_query($sqlj,$conj);

mysql_close($conj);
?>

<?php
$conk= mysql_connect("localhost","root","");
if (!$conk)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_diz', $conk);
$sqlk="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlk);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_diz",$conk))
  {
  echo "<br>Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_diz", $conk);
$sqlk= "CREATE TABLE Duiz
(
name varchar(200),
ques varchar(500),
ans1 varchar(500),
ans2 varchar(500),
ans3 varchar(500),
ans4 varchar(500),
ans5 varchar(500),
ans6 varchar(500)
)";

// Execute query
mysql_query($sqlk,$conk);

mysql_close($conk);
?>

<?php
$conm= mysql_connect("localhost","root","");
if (!$conm)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('my_giz', $conm);
$sqlm="set names 'utf8'";// for unicode support, must use after mysql_select_db() function.
mysql_query($sqlm);
mysql_query('SET CHARACTER SET utf8')or die('charset problem:'.mysql_error());
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die('collation problem:'.mysql_error());


// Create database
if (mysql_query("CREATE DATABASE my_giz",$conm))
  {
  echo "<br>Database created<br>";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("my_giz", $conm);
$sqlm= "CREATE TABLE Guiz
(
name varchar(200),
ques varchar(500),
ans1 varchar(500)
)";

// Execute query
mysql_query($sqlm,$conm);

mysql_close($conm);
?>


