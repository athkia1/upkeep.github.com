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
		.image-container {
			position: relative
    width: 100%;
    max-width: 2005px;
    margin: 0 auto;
    text-align: center;
  }

  .image-container img {
	box-shadow: 0px 50px 40px rgba(0, 0, 0, 1);
    display: inline-block;
    vertical-align: middle;
  }

  .image-container img:nth-child(1) {
    width: 30%;
  }

  .image-container img:nth-child(2) {
    width: 30%;
  }

  .image-container img:nth-child(3) {
    width: 30%;
  }
  
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!--navbar starting-->

	<nav>
		<a class="active" href="index.php">Home</a>
		<a href="about.php	">About</a>
		<a href="items.php">Items</a>
		<a href="contact.php">Contact</a>
	<a href="review.php">Review</a>
	</nav>

	<!--navbar ending-->	

<div class="image-container">
	<a href="corner.php">
 <img src="images/corner2.jpg" alt="Image 1"  width="400" height="600">
 	</a>
	<a href="wall.php">
  <img src="images/wall2.jpg" alt="Image 2" width="400" height="600">
  	</a>
	<a href="table.php"> 
  <img src="images/table2.jpg" alt="Image 3" width="400" height="600">
  	</a>
</div>

</body>
</html>