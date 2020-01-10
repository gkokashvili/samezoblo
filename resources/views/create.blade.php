<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container">
	<form class="mt-3" method="post" action="{{ route('guest.store') }}">@csrf
		  <div class="form-group">
		    <input type="text" name="name" class="form-control" placeholder="Full Name">
		  </div>
		  <div class="form-group">
		    <input type="text" name="Email" class="form-control" placeholder="E Mail">
		  </div>
		  <div class="form-group">
		    <input type="password" name="password" class="form-control" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <input type="password" name="verifyPassword" class="form-control" placeholder="Repeat Password">
		  </div>
		  <div class="form-group">
		    <input type="text" name="streetName" class="form-control" placeholder="Street Name">
		  </div>
		  <div class="form-group">
		    <input type="text" name="streetNumber" class="form-control" placeholder="Street number">
		  </div>
		  <div class="form-group">
		    <input type="text" name="personalId" class="form-control" placeholder="Personal Identification number">
		  </div>
		  <div class="form-group">
		    <input type="text" name="adultsInFamily" class="form-control" placeholder="Adults in Family">
		  </div>
		  <div class="form-group">
		    <input type="text" name="floor" class="form-control" placeholder="Floor Number">
		  </div>
		  <div class="form-group">
		    <input type="text" name="squareMeters" class="form-control" placeholder="Square Meters">
		  </div>
		  <button value="submit" type="submit" class="btn btn-primary">Register</button>
	</form>
</div>