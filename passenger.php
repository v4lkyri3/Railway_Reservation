<?php
	$val=$_GET['value'];
	if($val==1){
	?>
	<script language='javascript'>alert('Passenger cannot travel due to Covid!!')</script>
	<?php
	}
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="User"; // Table name
$name=$_SESSION['name'];

require('firstimport.php');

mysqli_select_db($conn,"$db_name") or die("cannot select db");

$result=mysqli_query($conn,"SELECT * FROM $tbl_name WHERE Username='$uname'");
$row=mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>
<head>
	<title> Passenger Details </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default1.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
		
</head>

<body>
	
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/profile.png"/>
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="booking.php">BOOKING HISTORY</a>
				</div>
			</div>
		</div>
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
		<div style="font-size:30px;"> Passenger Details</div>
		<br/>
		
		
		<div class="table">
		
		<form name="signup"  method="post" action="confirm.php" onsubmit="return valid12()">
		<table>
		<tr>
				<td>
					<form action="editprofile.php" method="post" enctype="multipart/form-data">
					<div class="span6" style="float:left;width:80%;">
					<table class="table">
					<tr>
			        <td style="border-top:0px;">Name <font color=red>* </font> </td>
			        <td style="border-top:0px;"><input type="text" class="input-block-level" id="pname" name="pname" placeholder="Passenger Name" onblur="return name1()"> <span id="fn" ></span></td>
		           </tr>
		           <tr>
			       <td style="border-top:0px;">Aadhar <font color=red>* </font> </td>
			       <td style="border-top:0px;"><input type="text" class="input-block-level" id="aadhar" name="aadhar" placeholder="Aadhar Number"> <span id="fn" ></span></td>
	               </tr>
				   <tr>
			       <td style="border-top:0px;"> Age <font color=red>* </font> </td>
			       <td style="border-top:0px;"><input type="number" class="input-block-level" id="age" name="age" placeholder="Age"> <span id="fn" ></span></td>
	               </tr>	
					<tr><td>Gender  </td>  <td><select name="sex">
				<option value="M">Male</option>
				<option value="F">Female</option>
			    </select>
			</td>
		</tr>
		
		
		<tr>
			<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="Submit" id="subb" ></td>
			<td style="border-top:0px;"><input class="btn btn-info"type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>

</body>
</html>