<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 class="text-center">This is contact page</h3>

	<form action="" method="post">
		@csrf
		<input type="text" name="email">
		<textarea name="message"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>
</html>