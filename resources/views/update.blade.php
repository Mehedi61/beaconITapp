<!DOCTYPE html>
<head>
	<title> Update </title>
</head>
<body>
	<h2> Update </h2>

	<form action="" method="POST">
		@csrf
	  <input type="hidden" name="id" value="{{$dataKey['id']}}"> <br> <br> 
	  <input type="text" name="name" value="{{$dataKey['name']}}"> <br> <br>
	  <input type="text" name="email" value="{{$dataKey['email']}}"> <br> <br>
	  <input type="text" name="designation" value="{{$dataKey['designation']}}"> <br> <br> 
	  <button type="submit">update</button>
	</form>

</body>
</html>
