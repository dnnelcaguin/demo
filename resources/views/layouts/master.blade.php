<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
	*{
		margin: 0;
	}
	.nav a{
		color: #000;
	}
	.nav{
		background-color: #C1C1C1;
		padding: 10px;
	}
	footer{
		background-color: #C1C1C1;
		border-radius: 5px;
		height: 30px;
		text-align: center;
	}

</style>
<body>
	<div class="container">
	<nav class="nav">
				<a class="navbar-brand" href="/home">Home</a>
  				<a class="nav-link active" href="about.php">About</a>
  				<a class="nav-link" href="#">Contact</a>
  				<a class="nav-link" href="#">Services</a>
	</nav>

	<aside>
		@yield('content')
	</aside>
	</div>
		@yield('footer')
</body>

</html>