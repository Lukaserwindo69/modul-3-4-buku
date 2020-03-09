<?php
function do_login($username , $password){
  if($username != "admin" ||  $password != "admin"){
    header("location:4.php?error=wrong");
  }
  if($username == "admin" ||  $password == "admin"){
    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;
    header("location:beranda.php");
  }
}
function check_login(){
  if(!isset($_SESSION["user"])){
    header("location:4.php");
  }
}

 ?>
