<?php

$con = mysqli_connect('localhost' , 'root' ,''); 
    mysqli_select_db($con,"iaq");
	$data=array();
$init=$_GET['init'];
$name=$_GET['name'];
$number=$_GET['number'];
$email=$_GET['email'];
$address=$_GET['address'];
$password=$_GET['password'];

$sql="insert into signup (email,init,name,number,address) values('$email','$init','$name','$number','$address')";

if($result=mysqli_query($con,$sql)){
	$sql="insert into login (username,password,devices,initials,client_name) values('$email','$password','[]','$init','$name')";
	if($result=mysqli_query($con,$sql)){
	$data[]="yes";
	}
	else
		echo mysqli_error($con);
	
}
	else
		$data[]="no";
	
	
	echo json_encode($data);
	
	

?>