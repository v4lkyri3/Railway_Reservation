<?php
session_start();

$uname=$_POST['uname'];
$pass=$_POST['psd'];

require('firstimport.php');


$tbl_name="User"; 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");



$word = $uname ;
$s="'"; 
if(strpos($word, $s) !== false){
	session_destroy();
}

if(strpos($pass, $s) !== false){
	session_destroy();
}

 else{
    echo "Word Not Found!";
}

if($uname=="1'or'1'='1"){
session_destroy();
}
else{

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($pass);
$options = 0;  
$encryption_iv = '1234567891011121'; 
$encryption_key = "GeeksforGeeks";
$encryption = openssl_encrypt($pass, $ciphering, 
            $encryption_key, $options, $encryption_iv); 


$sql="SELECT * FROM $tbl_name WHERE Username='$uname' and Password='$encryption'";
echo "$sql";

$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

}

if(mysqli_num_rows($result) < 1)
{

	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:login1.php"); 
}
else
{
	$_SESSION['name'] = $uname; 
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:index.php");   
}


?>

	