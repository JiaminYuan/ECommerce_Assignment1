<html>
<head>
	<title>About Us</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
  		<div class="row">
    		<div class="col">
      			<ul>
					<li><a href='/Main/index'>Landing Page</a></li>
					<li><a href='/Main/about_us'>About Us</a></li>
					<li><a href='/Contact/index'>Contact Us</a></li>
					<li><a href='/Contact/read'>See the messages we get</a></li>
				</ul>
    		</div>
    		<div class="col">
		      	<header><h1>About Us</h1></header>
				<p>See our incredible team of devs</p>
				<figure class="figure">
				  <img src="../images/jiamin.jpeg" class="figure-img img-fluid rounded" alt="image1">
				  <figcaption class="figure-caption">Jiamin loves cat.</figcaption>
				</figure>
				<figure class="figure">
				  <img src="../images/dinal.jpeg" class="figure-img img-fluid rounded" alt="image2">
				  <figcaption class="figure-caption">Dinal likes watching bears fish.</figcaption>
				</figure>
    		</div>
    		<div class="col-6">
    		</div>
  		</div>
  		<?php include $_SERVER['DOCUMENT_ROOT']."/app/views/Count/index.php";?>
  	</div>
</body>
</html>