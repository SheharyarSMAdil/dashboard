	<?php
$con = mysqli_connect('localhost' , 'root' ,''); 
    mysqli_select_db($con,"iaq");
$username=$_GET["client"];
	$sql= "SELECT * from login where username='$username'";
	$result=mysqli_query($con,$sql);
	$data=array();
	
		$sql= "SELECT * from signup where email='$username'";
	$result=mysqli_query($con,$sql);
	$data=array();
	$num=mysqli_num_rows($result);
	if($num==1)
	{ 
$row=mysqli_fetch_array($result,MYSQLI_NUM);
		$data['e']=$row[0];
		$data['i']=$row[1];
		$data['n']=$row[2];
		$data['nu']=$row[3];
		$data['a']=$row[4];
	}
	echo json_encode($data);
	
?>