<html>
<head>
	<title>Contact Us -message sent</title>
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
	      		<header><h1>Contact Us - messages sent</h1></header>
	      		<p><!--display the data as a table-->
				<table>
					<tr><th>ID</th><th>Email</th><th>Message</th></tr>
					<?php 
						//$data
						$c = count($data);
						$i = 0;
						foreach ($data as $item){
							echo "<tr>
								<td>$item->id</td>
								<td>$item->email</td>
								<td>$item->message</td>
							</tr>";
						}
					?>
				</table>
				</p>
				<div class="position-absolute bottom-50 end-50">
  					<?php include $_SERVER['DOCUMENT_ROOT']."/app/views/Count/index.php";?>
				</div>	
	    	</div>
		</div>
	</div>
</body>
</html>