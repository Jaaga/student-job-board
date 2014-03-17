<!Doctype html>
<html>
<head><title>Signup</title></head>
<body>

<form action="." method="post">
	<label for="name">Name</label>
	<input type="name" name="name" id="name"><br>
	<label for="username">UserName</label>
	<input type="name" name="username" id="username"><br>
	<label for="email">Email</label>
	<input type="name" name="email" id="email"></br>
	<label for="password">Password</label>
	<input type="password" name="password" id="password"></br>

	<?php if(isset($msg)){echo "Sorry Email already in use";} ?>

	<input type="submit" name="action" value="Sign Up">


</form>



</body>
</html>