<!DOCTYPE html>
<?php
if (isset($_POST['firstnamename']['birthday'])) {
	$name = $_POST['firstname'];
	$birthday = $_POST['birthday'];
	
	}
print_r($_POST);	
?>
<html>
<head>
<title>Test Form</title>
</head>
<body>
<form method="POST" action="form.php">
<input type="text" name="firstname"><br><br>
<input type="text" name="lastname"><br><br>
<input type="date" name="birthday">
<input type="submit" name="submit" value="submit">
</form> 
</body>

</html>
