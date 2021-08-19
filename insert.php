<!DOCTYPE>

<html>
	<head>
		<title>Insert Into Database</title>
        <link rel="stylesheet" href="Include/style.css">
	</head>
	<body>
<?php ?>

       <form class="" action="insert.php" method="post">
		<fieldset>
			<span class="FieldInfo">Employee Name:</span>
			<br>
			<input type="text" name="EName" value="">
			<br>
			<span class="FieldInfo">Social Security Number:</span>
			<br>
			<input type="text" name="SSN" value="">
			<br>
			<span class="FieldInfo">Department:</span>
			<br>
			<input type="text" name="Dept" value="">
			<br>
			<span class="FieldInfo">Salary:</span>
			<br>
			<input type="text" name="Salary" value="">
			<br>
			<span class="FieldInfo">Home Address:</span>
			<br>
			<textarea name="HomeAddress" rows="8" cols="80"></textarea>
			<br>
			<input type="submit" name="Submit" value="Submit your record">
		</fieldset>
	</form>

	</body>
</html>
