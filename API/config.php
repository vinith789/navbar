<?php
$conn = mysqli_connect('localhost','root','','ship-management');
if($conn==false){
  die("Connection Failed: ".mysqli_connect_error());
}
?>