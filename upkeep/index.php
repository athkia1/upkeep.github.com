<!DOCTYPE html>
<html lang="en">
<head>

<style>
		body {
      		background-image: url('images/backc.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: fit-content;
		}
		
		#portrait {
			float: right;
			margin: 30px;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.4);
		}
		.left-column {
			float: left;
			width: 30%;
			margin-right: 5%;
			font-size: 60px;
			font-style: italic;
			padding-left: 130px;
			padding-top: 90px;
		}

    	nav {
			overflow: hidden;
		}

		nav a {
			background-color: peachpuff;
			float: left;
			color: black;
			text-align: center;
			padding: 50px 126px;
			text-decoration: none;
			font-size: 18px;
		}

		nav a:hover {
			background-color: white;
			color: lightblue;
		}

		nav a.active {
			background-color: peachpuff;
			color: black;
		}
		.my-button{
			background-color: blue;
			color: white;
		}
		/* Add additional styles here as needed */
	</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body >
	
<!--navbar starting-->

	<nav>
		<a class="active" href="index.php">Home</a>
		<a href="about.php	">About</a>
		<a href="items.php">Items</a>
		<a href="contact.php">Contact</a>
	<a href="review.php">Review</a>
	</nav>

<!--navbar ending-->

	<div class="left-column">
		<p>Upgrade<br>&#160 With<br> &#160 &#160 Us</p>
	</div>

	<div id="portrait"> 
		<img src="images/home.jpg" alt="Portrait Image" width="800" height="600">
	</div>

</body>
</html>