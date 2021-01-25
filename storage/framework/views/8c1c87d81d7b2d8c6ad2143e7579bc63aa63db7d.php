


<!DOCTYPE html>
<html>
<head>
	<title>ConstruXology</title>
	<link rel="stylesheet" type="text/css" href="booksstyle2.css">
</head>
<center>
<body>
	<header class='tabwan'>	




<div class="myweb">
<p>ConstruXology</p>
</div>

<div class="links">
	<div class="home">
		<a href="books.php">Home</a>
	</div>
<br><br>
	<div class="books">
		<a href="books.php">Books</a>
	</div>
<br><br>
	<div class="issued">
		<a href="books.php">Issued</a>
	</div>
<br><br>
	<div class="return">
			<a href="books.php">Return</a>
	</div>
	<br><br>
	<form action="loginpage.php">
	<div class="Action">
			<button type="submit" name="logout">Logout</button>
</form>
			<?php
			if(isset($_POST['logout'])){
			session_start();
session_destroy();
header('Location: loginpage.php');
exit;
}
?>
	</div>



<div class="aht">
	<p>ConstruXology.edu</p>
</div>


	</div>
	<div class="view">
	<button></button>
	</div>
	</header>

</body>
</center>
</html>

<div class="seedetails">
<button name="btnEdit"><a href="updateaccount">Edit</a></button>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/books.blade.php ENDPATH**/ ?>