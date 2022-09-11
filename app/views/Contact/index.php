<html>
<head>
	<title>Contact Us</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<div class="row row-cols-auto">
		    <div class="col">
		    	<ul>
					<li><a href='/Main/index'>Landing Page</a></li>
					<li><a href='/Main/about_us'>About Us</a></li>
					<li><a href='/Contact/index'>Contact Us</a></li>
					<li><a href='/Contact/read'>See the messages we get</a></li>
				</ul>
		    </div>
		    <div class="col">
		     	<header><h1>Contact Us</h1></header>
				<p>Wanna reach us? Write your email information and messages in the following form and then submit it.</p>
				<form action='' method='post'>
					<div class="form-group row">
				   		<div class="form-group row">
			    			<label for="inputEmail" class="col-sm-2 col-form-label">Email: </label>
			    			<div class="col-sm-10">
			      				<input type="email" class="form-control" id="inputEmail">
			    			</div>
			  			</div>
			  			<div class="form-group row">
			    			<label for="inputMessage" class="col-sm-2 col-form-label">Message: </label>
			    			<div class="col-sm-10">
			      				<textarea class="form-control" id="inputMessage" rows="2"></textarea>
			    			</div>
			  			</div>
				   		<button type="submit" class="btn btn-default btn-block">Send!</button>
				</form>
		    </div>
		</div>
	</div>

</body>
</html>