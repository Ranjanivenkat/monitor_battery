<?php

$username=$_POST['uname'];
$password=$_POST['psw'];

if($username=="project" && $password=='#abc@')
{
$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		echo "<script>alert('Login Sucessfully');window.location='display/show.php';</script>";
}else{
    
    echo "<script>alert('incorrect username and password');window.location='index.html';</script>";
}
		
		?>