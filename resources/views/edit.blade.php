<!DOCTYPE html>
<head>
	<title> Edit </title>
</head>
<body>
	<h2> Edit </h2>

	<form action="" method="POST">
		@csrf
	  <label for="email">email: </label>
	  <input type="text" name="email"><br><br>
	  <button type="submit">submit</button>
	</form>

</body>
</html>
