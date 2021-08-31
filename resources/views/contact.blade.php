<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

 
    <style>
        * {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Poppins', sans-serif;
}
.wrapper {
	width: 1170px;
	margin: auto;
}
header {
	background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/style_login/image/bgimg.jpg);
	background-attachment: fixed;
	height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}
.nav-area {
	float: right;
	list-style: none;
	margin-top: 80px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	border: 1px solid #fff;
    	color: #fff;
}
.logo {
	float: left;
}
.logo img {
	width: 70%;
	
    padding-left: -50px;
}
.welcome-text {
	position: absolute;
	width: 600px;
	height: 200px;
	margin: 10% 30%;
	text-align: center;
}
.welcome-text form label {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 20px;
}
.welcome-text h1 span {
	color: #00fecb;
	font-size: 80px;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
}
/*resposive*/

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 50%;
		text-align: center;
		margin: auto;
	}
	img {
		width: ;
	}
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 20% 0;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
}

        </style> 
</head>
<body>

    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="assets/style_login/image/Ahmed.png" alt="">
        </div>
<ul class="nav-area">
<li><a href="{{route('home')}}">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li style="margin-left: 80px"><a href="{{route('login')}}">Login</a></li>
</ul>
</div>
<div class="welcome-text">
	<form action="" method="post" action="{{ route('contact.store') }}">

		<!-- CROSS Site Request Forgery Protection -->
		@csrf
	
	   
		<div class="form-group">
			<label >Name</label>
			<input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
	
			<!-- Error -->
			@if ($errors->has('name'))
			<div class="error">
				{{ $errors->first('name') }}
			</div>
			@endif
		</div>
	
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
	
			@if ($errors->has('email'))
			<div class="error">
				{{ $errors->first('email') }}
			</div>
			@endif
		</div>
	
		<div class="form-group">
			<label>Phone</label>
			<input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
	
			@if ($errors->has('phone'))
			<div class="error">
				{{ $errors->first('phone') }}
			</div>
			@endif
		</div>
	
		<div class="form-group">
			<label>Subject</label>
			<input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
				id="subject">
	
			@if ($errors->has('subject'))
			<div class="error">
				{{ $errors->first('subject') }}
			</div>
			@endif
		</div>
	
		<div class="form-group">
			<label>Message</label>
			<textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
				rows="4"></textarea>
	
			@if ($errors->has('message'))
			<div class="error">
				{{ $errors->first('message') }}
			</div>
			@endif
		</div>
	
		<input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
	</form>

	
</div>
</header>


</div>

</body>
</html>
