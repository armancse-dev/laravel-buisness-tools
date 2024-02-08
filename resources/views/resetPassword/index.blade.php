<!DOCTYPE html>
<html>

<head>
	<title>Reset Password</title>
	<!--<link rel="stylesheet" type="text/css" href="assets/styles/signup.css">-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/signup.css') }}">
	<script src="assets/js/validSignup.js"></script>
</head>

<body>
	<div class="wrap">
		<span style="color: red">
			@if (session('error'))
				{{session('error')}}
			@endif
		</span>
		<span style="color: green">
			@if (session('success'))
				{{session('success')}}
			@endif
		</span>
		<h2>Reset Password</h2>
		<form method="post" name="myForm">
			<input type="hidden" name="token" value="{{ csrf_token() }}">
			<input type="email" name="email" placeholder="Enter your Email" value="" required>
			<input type="submit" value="SUBMIT">
		</form>
	</div>
</body>

</html>
