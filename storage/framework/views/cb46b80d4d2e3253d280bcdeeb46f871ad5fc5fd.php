




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
	





<form action="updateaccount" method="POST">	
<label>ID:</label>
<br>
<input type="text" name="idUp" value="">
<br>
<label>First Name:</label>
<br>
<input type="text" name="fnameUp" value="">
<br>
<label>Last Name:</label>
<br>
<input type="text" name="lnameUp" value="">
<br>
<label>Email:</label>
<br>
<input type="text" name="emailUp" value="">
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
</html><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/updateacc.blade.php ENDPATH**/ ?>