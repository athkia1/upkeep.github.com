<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
      		background-image: url('images/backcolor.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: fit-content;
		}
        nav {
            width: 100%;
			overflow: hidden;
		}

		nav a {
			background-color: peachpuff;
			float: left;
			color: black;
			text-align: center;
			padding: 50px 126.15px;
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
        #portrait {
			float: left;
			margin: 30px;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.4);

		}	
		.right-column {
			float: left;
			max-width: 600px;
			width: 100%;
			font-size: 45px;
			font-style: italic;
		}
		.about-par{
			float: left;
			padding-left: 8px;
			max-width: 600px;
			width: 100%;
			font-size: 80px;
			font-style: italic;
		}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!--navigation bar starts-->

    <nav>
		<a class="active" href="index.php">Home</a>
		<a href="about.php">About</a>
		<a href="items.php">Items</a>
		<a href="contact.php">Contact</a>
	<a href="review.php">Review</a>
	</nav>

    <!--navigation bar ends-->

	<div id="portrait"> 
			<img src="images/about.jpg" alt="Portrait Image" width="800" height="600">
	</div>
	<div class="right-column">
		<p class="about-par">ABOUT</p>
		<p>A secured online shopping <br>experience for antique lovers, <br>bachelors, newlyweds and everyone with a recreating <br>mindset. Along with a happy <br>price range.</p>
	</div>
</body>
</html>