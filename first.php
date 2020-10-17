<?php
	header("Location:./index.html");
	$con=mysqli_connect('localhost','root','','ved');

	$f1=$_POST['f1'];
	$f2=$_POST['f2'];
	$f3=$_POST['f3'];


	$sql="INSERT INTO `feedback`(`Name`,`Email`,`Message`) VALUES ('$f1','$f2','$f3')";
	$rs=mysqli_query($con, $sql);
	if($rs)
	{
		echo "Connected";
	}
	else
	{
		echo "Error";
	}
?>

