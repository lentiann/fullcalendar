<?php
include('db.php');
session_start();
$user_check=$_SESSION['uname'];

$ses_sql = mysqli_query($connection,"SELECT uname FROM users WHERE uname='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['uname'];

if(!isset($user_check))
{
header("Location: index.php");
}
?>