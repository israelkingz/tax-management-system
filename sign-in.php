<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
Start session
*/include 'connect.php';
	session_start();
	if(isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: index.php");

$session_id=$_SESSION['SESS_FIRST_NAME'];

$staff_query = mysql_query("select * from table_admin where name = '$session_id'")or die(mysql_error());
$staff_row = mysql_fetch_array($staff_query);
$staff_fullname =$staff_row['name'];

}?>
<!DOCTYPE HTML>
<html>
<head>
<title>ForexLot Admin | Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to</span> <a href="index.html">Business Account</a></p>
						</div>
						<div class="signin">
							
							<form action="process_login.php" method="post">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name="username" value="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name:';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" class="lock" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password:';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button class="btn btn-primary ewButton" name="btnsubmit" id="btnsubmit" type="submit">Login</button>
							<a href="registeracct.php">Register </a></li>
						</div>
					</div>
						</form>	 
						</div>
					</div>
				</div>
			</div>
		<?php include"footer.php"; ?>