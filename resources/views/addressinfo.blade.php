<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Address info</h2>

		<ul>
			<li>Id : {{$address->id}}</li>
			<li>Address: {{$address->name}} {{$address->number}}</li>
		</ul>

	<h2>Users Registerd on this address</h2>
		<ul>
			@foreach($address->getUsers() as $user)
					<li>{{$user->name}}</li>
			@endforeach
		</ul>
	<h2>Taxes for this address</h2>
		<ul>
			@foreach($address->getTaxes() as $tax)
				<li>Name: {{$tax->name}} Amount: {{$tax->amount}}</li>
			@endforeach
		</ul>
	
</body>
</html>