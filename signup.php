<?php
	$val=$_GET['value'];
	if($val==1){
	?>
	<script language='javascript'>alert('User already exists!')</script>
	<?php
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
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
				<a class="brand" href="profile.php">PROFILE</a>
				</div>
			</div>
		</div>
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
		<div style="font-size:30px;"> Signup</div>
		<br/>
		
		
		<div class="table">
		
		<form name="signup"  method="post" action="register.php" onsubmit="return valid12()">
		<table>
		<tr>
			<td style="border-top:0px;"> Username <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="uname" id="uname" 
				class="input-block-level" pattern="[A-Za-z]{4-12}" placeholder="Enter the Username" onblur="return name1()"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" id="p1" name="psd" placeholder="Enter the password" onblur="return check1()"> <span id="ps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Confirm Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" id="p2"name="cpsd" placeholder="Re-type the password" onblur="return confirm1()"> <span id="cps" ></span></td>
		</tr>	
		<tr>
			<td style="border-top:0px;"> Mobile No. <font color=red>*</font> </td>
			<td style="border-top:0px;"> +91 <input type="text" class="input-block-level"  name="mobile" placeholder="" onblur="return mobile1()"> <span id="mn"></span></td>
		</tr>
		
		
		<tr>
			<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="submit" id="subb" ></td>
			<td style="border-top:0px;"><input class="btn btn-info"type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>
		
 <script type="text/javascript">

function check123()
	{
		var c=document.getElementById("p1").value;
		//alert(c.length);
		if(c.length < 8 )
		{
			document.getElementById("ps").innerHTML="<br/><font color=red>password must be atleast 8 char long</font>";
			return false;
		}
</script>

</body>
</html>