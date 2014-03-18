<!DOCTYPE html>

<html>
<head>
<title></title>
</head>
<body>

		<h3>Account Informations</h3>
		<form action="." method="post">
		<label for="paypal">Paypal:</label>
		<input type="name" name="paypal" value="<?php echo $paypal; ?>"><br>
		<label for="linkedin">Linkedin:</label>
		<input type="name" name="linkedin" value="<?php echo $linkedin; ?>"><br>
		<label for="about">About:</label>
		<input type="name" name="about" value="<?php echo $about;?>"><br>
		<input type="submit" name="action" value="Update">
		</form>



</body>
</html>