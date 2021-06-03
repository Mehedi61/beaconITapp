<!DOCTYPE html>
<head>
	<title> Create </title>
</head>
<body>
	<h2> Create </h2>

	<form action="" method="POST">
		@csrf
	  <br><label for="name">name: </label>
	  <input type="text" name="name"><br><br>

	  <label for="email">email: </label>
	  <input type="text" name="email"><br><br>

	  <label for="designation">designation: </label>
	  <input type="text" name="designation"><br><br>

	  <button type="submit">submit</button>
	</form>

</body>
</html>
