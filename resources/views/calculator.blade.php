<!DOCTYPE html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h2> Calculator </h2>

	<form action="" method="POST">
		@csrf
	  <br><label for="firstNumber">First Number:</label>
	  <input type="text" name="firstNumber" style="width:100px;padding-bottom: 5px;">
	  +
	  <label for="secondNumber">Second Number:</label>
	  <input type="text" name="secondNumber" style="width:100px;padding-bottom: 5px;"> =
	  <button type="submit">submit</button>
	</form>

</body>
</html>
