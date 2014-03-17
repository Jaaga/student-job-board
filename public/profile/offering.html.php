<!DOCTYPE html>

<html>
<head>
<title> <?php echo $pagetitle; ?></title>
</head>
<body>

		<h2>Offering Information</h2>

		<h4><?php echo $pagetitle; ?></h4>
		<form action="." method="post">
		<label for="title">Title:</label>
		<input type="name" name="title" value="<?php echo $offering['title']; ?>"><br>
		<label for="description">Description:</label>
		<input type="name" name="description" value="<?php echo $offering['description']; ?>"><br>
		<label for="category">Category :</label>
		<select name="category">
			<option value="1">Wordpress</option>
			<option value="2">Graphics</option>
		</select>
		<input type="hidden" name="offerid" value="<?php echo $offering['offerid']; ?>"><br>
		<input type="submit" name="act" value="<?php echo $actionname; ?>">
		</form>
</body>
</html>