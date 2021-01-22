<?php
session_start();
require('firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="User"; // Table name
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$uname=$_POST['uname'];
$pass=$_POST['psd'];
$mobile=$_POST['mobile'];
$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($pass);
$options = 0;  
$encryption_iv = '1234567891011121'; 
$encryption_key = "GeeksforGeeks";
$encryption = openssl_encrypt($pass, $ciphering, 
            $encryption_key, $options, $encryption_iv); 

while($row=mysqli_fetch_array($result2)){
	if($row['Username']==$uname){
		echo ""."matched";
		$flag=1;
		break;
	}
}
if($flag==1){
    header("location:signup.php?value=1");
	//echo "oh yes";
	}
else{
	$sql="INSERT INTO $tbl_name(Username,Phone_No,Password)
	VALUES ('$uname','$mobile','$encryption')";
	$result=mysqli_query($conn,$sql);
	$_SESSION['name']=$uname;
	header("location:login1.php");
	
}

?>