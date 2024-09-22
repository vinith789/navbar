<?php
@include 'config.php';

session_start();

if (isset($_SESSION['user_id'])){
  $user_id =$_SESSION['user_id'];
}
  $user=$_SESSION['user_id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	mysqli_query(mysql: $conn,query: "insert into `add-ship` (name,price,user) values ('$name','$price','$user')");
	header(header: 'location:list.php');
?>