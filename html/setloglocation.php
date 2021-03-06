<!DOCTYPE html>


<html>

<head>
	<meta charset="UTF-8">
	<title>Page Floate Layout Template</title>
	<link rel="stylesheet" href="../css/floatlayout.css" type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px;
		}
		
		h1{
			text-decoration:underline;
		}

		#main_page {
			margin-bottom: 160px;
		}

		#clear {
			clear: both;
		}
	</style>
</head>

<body>
	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):?>

	<div id="centerpage">
		<header class="banner">
		<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">View and Modify Logs</section>
			<nav>
				<a href="./pcuserlist.php">PC User List</a>
				<a href="./reviewItems.php">Review Controlled Items</a>
				<a href="./administeritems.php">Administer List of Controlled Items</a>
				<a href="./logs.php">Log List</a>
			</nav>
		</header>

		<section id="main">
			<!-- Main Content Begin -->
			<article style="font-size:1.3em">
				<br>
				<h1>User Login Log</h1> <input style="font-size:.9em" value="View" type="submit"><input type="submit" value="Move" style="font-size:.9em">
			
				<h1>Computers Updated Log</h1><input style="font-size:.9em" value="View" type="submit"><input type="submit" value="Move" style="font-size:.9em">
				
				<h1>File Changed on Client Log</h1><input style="font-size:.9em" value="View" type="submit"><input type="submit" value="Move" style="font-size:.9em">
				
				<h1>Unknown File Log</h1> <input style="font-size:.9em" value="View" type="submit"><input type="submit" value="Move" style="font-size:.9em">
				
				<h1>Obsolete File Log</h1> <input style="font-size:.9em" value="View" type="submit"><input type="submit" value="Move" style="font-size:.9em">
				
				<h1>Forbidden Files Log</h1> <input style="font-size:.9em" value="View" type="submit"><input type="submit" value="Move" style="font-size:.9em">
				
				<br><br><br><br><br>


			</article>
			<!-- Main Content End -->
			<!-- Right Box Begin-->

			<aside>
				<h1>Reference Links</h1>
				<embed id="mysidebar" src="sidebar.html">
			</aside>
			<!-- Right Box End-->

			<div id="clear"></div>
		</section>
	</div>

	<footer>
		
	</footer>

<?php else : ?>
	<font size="10px" color="red">Access Denied!</font><br><br>
	<font size="4px" color="blue">Click here to </font>
	<a href="../php/loginSession.php">Login</a>
<?php endif; ?>

</body>

</html>
