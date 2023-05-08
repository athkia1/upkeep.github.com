<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<style>
		body {
            background-image: "upkeep.jpg";
			background-color: #F5DEB3;
		}
		button {
			background-color: blue;
			color: black;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			margin: 10px;
			border-radius: 30%; /* sets the button border radius to 50% */
			width: 150px; /* sets the button width */
			height: 50px; /* sets the button height */
		}
	</style>
</head>
<body>
	<h1>Welcome to My Website</h1>
	<form>
		<button type="button" onclick="window.location.href='signup.html'">Signup</button>
		<button type="button" onclick="window.location.href='login.html'">Login</button>
	</form>
</body>
</html>
