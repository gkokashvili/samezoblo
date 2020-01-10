<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>User information:</h1>
		<ul>
			<li>Id: {{$user->id}}</li>
			<li>Name: {{$user->name}}</li>
			<li>E-Mail: {{$user->email}}</li>
			<li>Personal Number: {{$user->personal_id}}</li>
			<li>Address: {{$user->getAddress()->name}} {{$user->getAddress()->number}}</li>
		</ul>
	
</body>
</html>
