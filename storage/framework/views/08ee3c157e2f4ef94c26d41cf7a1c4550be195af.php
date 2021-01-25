<?php

include 'bookconnect.php';
$id_user = $_GET['uid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.buttonup button{
		margin-top: 5px;
	}
</style>
<body>
		<?php
			//retrieve a single record
		$sqlDisplay = "SELECT * FROM tblLibrary WHERE id_number = '$id_user'";
		$queryDisplay = mysqli_query($connect,$sqlDisplay);
		$row = mysqli_fetch_assoc($queryDisplay);

		?>
<form action="updateaccount.php?uid=<?=$row['id_number']?>" method="POST">	
<label>ID:</label>
<br>
<input type="text" name="idUp" value="<?=$row['id_number']?>">
<br>
<label>First Name:</label>
<br>
<input type="text" name="fnameUp" value="<?=$row['fname']?>">
<br>
<label>Last Name:</label>
<br>
<input type="text" name="lnameUp" value="<?=$row['lname']?>">
<br>
<label>Email:</label>
<br>
<input type="text" name="emailUp" value="<?=$row['mobileemail']?>">
<br>
<div class="buttonup">
<button type="submit" name="btnUpdate">Update</button>
</div>
<br>
<label>Change Password</label>
<br>
<label>Confirm Password:</label>
<br>
<input id="cPass" type="text" name="conPass" required>
<br>
<input type="checkbox" onclick="myFunction()">Show Password
<br>
<label>New Password:</label>
<br>
<input type="text" name="newPass" required>
<br>
<input type="checkbox" onclick="myFunction()">Show Password


<div class="buttonup">
<button type="submit" name="btnUpPass">Update</button>
</div>
</form>
<?php

		//Post Method
		 if(isset($_POST['btnUpdate'])){
			//initialization
			$IDup = $_POST['idUp'];
			$fnameUp = $_POST['fnameUp'];
			$lnameUp = $_POST['lnameUp'];
			$emailUp = $_POST['emailUp'];


		$sqlUpdate = "UPDATE tblLibrary set id_number = '$IDup', fname = '$fnameUp', lname = '$lnameUp', mobileemail = '$emailUp' WHERE id_number = '$id_user'";
		$query = mysqli_query($connect,$sqlUpdate);
		if ($query == TRUE) {
			echo "Record Updated";
		}else{
			echo "Record Not Updated";
		}

		//ternary operator
		/*echo($query == TRUE) ? "Record Updated" : "Record Not Updated";*/
	}
?>











<?php

		//Post Method
		 if(isset($_POST['btnUpPass'])){
			//initialization
			$newPass = $_POST['newPass'];
			$conPass = $_POST['conPass'];



		$sqlSelect="SELECT * FROM tblLibrary WHERE id_number='$id_user'";
          $query=mysqli_query($connect,$sqlSelect);
          $rowss=mysqli_fetch_assoc($query);
		if ($rowss['npassword']==$conPass) {
			$sqlUpdate = "UPDATE tblLibrary set npassword = '$newPass' WHERE id_number = '$id_user'";
			$queryy = mysqli_query($connect,$sqlUpdate);
		if ($queryy == TRUE) {
			echo "Record Updated";
		}
	}
		else{
			echo "Record Not Updated";
		}
		

		//ternary operator
		/*echo($query == TRUE) ? "Record Updated" : "Record Not Updated";*/
	}
?>

<?php
/*
  $x = $_POST['cPass']
if ($x == "password") {
	# code...
}



  /*
 echo if ($x.type == "password") {
    $x.type = "text";
  } else {
    $x.type = "password";
  }
}*/
?>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/updateaccount.blade.php ENDPATH**/ ?>