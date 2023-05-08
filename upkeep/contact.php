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
        .contact-info {
        max-width: 100%;
        margin: 0 auto;
        text-align: center;
      }
      
      /* Contact information items */
      .contact-item {
        display: inline-block;
        margin: 80px;
      }
      
      /* Contact information icons */
      .contact-icon {
        font-size: 70px;
        margin-bottom: 10px;
      }
      
      /* Contact information text */
      .contact-text {
        font-size: 70px;
      }
      .contact-icon {
        font-size: 30px;
        margin-bottom: 10px;
        color: blue;
        }

        .contact-text {
        font-size: 40px;
        color: black;
        }
        h1{
         text-align: center;
         font-size: large;
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


    <h1>Contact Us</h1>
    <div class="contact-info">
      <div class="contact-item">
        <i class="contact-icon fas fa-phone"></i>
        <div class="contact-text">Phone: 01834569023</div>
      </div>
      <div class="contact-item">
        <i class="contact-icon fas fa-envelope"></i>
        <div class="contact-text">Email: upkeep.homedecor@gmail.com</div>
      </div>
      <div class="contact-item">
        <i class="contact-icon fas fa-map-marker-alt"></i>
        <div class="contact-text">Address: EDU er pasher building</div>
      </div>
    </div>

</body>
</html>