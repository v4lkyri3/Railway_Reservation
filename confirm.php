<?php
session_start();
require('firstimport.php');

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$tbl_name="Covid"; 
$tbl_name1="Passenger";
$aadhar=$_POST['aadhar'];
$pname=$_POST['pname'];
$age=$_POST['name'];
$sex=$_POST['sex']


$sql2="SELECT * FROM $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;

while($row=mysqli_fetch_array($result2)){
	if($row['Aadhar']==$aadhar){
		$flag=1;
		break;
	}
}

if($flag != 1)
{

$sql1="INSERT INTO $tbl_name1(Aadhar,P_Name,Age,Sex) VALUES ('$aadhar','$pname','$age','$sex')";
$result1=mysqli_query($conn,$sql1);
$_SESSION['num']=$aadhar;
header("location:reservation.php"); 
}
else
{
header("location:passenger.php?value=1");   
}

?>