<!DOCTYPE html>
<html>
<head>
	<title>ConstruXology</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
</head>
<center>
<body>
	<header class='tabwan'>	




<div class="myweb">
<p><a href="home">ConstruXology</a></p>
</div>

<div class="links">
	
	<form action="login.php">
	<div class="Action">
			<button type="submit" name="logout">Logout</button>
</form>
			<?php
			if(isset($_POST['logout'])){
			session_start();
session_destroy();
header('Location: login');
exit;
}
?>
	</div>



<div class="aht">
	<p>ConstruXology.edu</p>
</div>

	</div>
	<div class="view">
	<button class="dashbook"><a href="booklist">Book List</a></button>
	<button class="dashadd"><a href="addbook">Add Book</a></button>
	</div>

	</header>

</body>
</center>
</html>



		
			<div class="home">
		<a href="home">Home</a>
	</div>

<div class="books">
		<a href="booklist">Book List</a>
	</div>
	<div class="addbook">
		<a href="addbook">Add Book</a>
	</div>

<div class="seedetails">
<button name="btnEdit"><a href="updateaccount">Profile</a></button>
</div>


<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/home.blade.php ENDPATH**/ ?>