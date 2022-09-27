<?php
session_start();
unset($_SESSION['name']);
if(session_destroy()) 
{
header("Location: Hume.php"); 
}
?>