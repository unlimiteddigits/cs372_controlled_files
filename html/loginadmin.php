<!DOCTYPE html>


<html>
<head>
	<title>Paragon Medical</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
		
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" 
	    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
	    crossorigin="anonymous">
	
	<style type="text/css">
		body {
			margin: 50px; 
			margin-left: auto; margin-right: auto;
			}
		#main_page {
			margin-bottom: 50px;
			margin-left: auto; margin-right: auto;
			text-align: center;
			}
		#main_page2{
			float: right;
			padding-right: 7px;
			margin-bottom: 7px;
			
		}
		#clear {
			clear: both; }
	</style>
</head>

<script>
	
	function redirect(){
		
		window.location.href = "../FileControl.php"
	}
	
</script>
<body>
	
	<?php $error1=""; include '../php/login.php';?>
	
	<div class = "container">
	<div id="centerpage" style="width: 60%">
		<header class="banner">
		<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">Admin Login</section>
			<nav>         
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<br><br>
			 
			<fieldset id="main_page" style="width:300px;border-color:blue;border-style:inset;
					background-color:  #F0F8FF;">
				<legend><font size="4px" color="blue">
					<b></b</font></legend>
				
				<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					
					<font size="3px" color="blue"><?php echo $error1;?></font><br>
					<font size="3px" color="blue">Username</font><br>
					
					<?php if (isset($_POST["user"])): ?>
					<input type="text" id="username" name="user" placeholder="Enter username" style="padding:12px 20px"
						value="<?= htmlspecialchars($_POST["user"]) ?>"><br/>
					
					<?php elseif (isset($_COOKIE["user"])): ?>	
					<input type="text" id="username" name="user" placeholder="Enter username" style="padding:12px 20px"
						value="<?= htmlspecialchars($_COOKIE["user"]) ?>"><br/>
					
					<?php else: ?>	
					<input type="text" id="username" name="user" placeholder="Enter username" style="padding:12px 20px"
						value=""><br/>
					<?php endif ?>
					
					<font size="3px" color="blue">Password</font><br>
					
					<?php if (isset($_POST["pass"])): ?>
					<input type="password" id="password" name="pass" placeholder="Enter password" style="padding:12px 20px"
						value="<?= htmlspecialchars($_POST["pass"])?>"><br/>
					
					<?php elseif (isset($_COOKIE["pass"])): ?>
					<input type="password" id="password" name="pass" placeholder="Enter password" style="padding:12px 20px"
						value="<?= htmlspecialchars($_COOKIE["pass"]) ?>"><br/>
					
					<?php else: ?>	
					<input type="password" id="password" name="pass" placeholder="Enter password" style="padding:12px 20px"
						value=""><br/>
					<?php endif ?>
					
					<button type="login" id="submit" style="padding:7px 45px;margin-top:5px;">Login</button>
					<button type="button" id="cancel1" name="cancel" onclick="redirect()" 
					style="padding:7px 18px;">Cancel</button><br>
				    
				    <input type="checkbox" name="memberSave" id="password" style="margin-top:8px;"> 
				    
					<font size="2px" color="blue" style="font-weight: normal"> Remember me</font>
					<br/><br><br>
					
				</form>
			</fieldset>
			
			<bottom id="main_page2">
				<font size="2px" color="blue" style="font-weight: normal"> Forgot 
				<a href="forgotPassword.php"> password?</a></font>	
			</bottom>
		</section>
		
	</div>
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>
	
</body>
</html>
