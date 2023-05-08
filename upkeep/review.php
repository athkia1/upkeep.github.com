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
        h1{
            text-align: center;
        }
        h1{
            font-size: 50px;
        }
        .column{
            text-align: center;
			max-width: 1500px;
			width: 100%;
			font-size: 50px;
			font-style: italic;
        }
        .left{
            float: left;
            width: 100%;
            padding-left: 200px;
            font-size: 40px;
        }
        form {
        max-width: 600px;
        margin: 0 auto;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      textarea {
        width: 100%;
        height: 200px;
        padding: 10px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        }

    textarea {
        width: 100%;
        height: 500px;
        padding: 10px;
        box-sizing: border-box;
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

    <form method="post" action="submit-review.php">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="review">Your Review:</label>
      <textarea id="review" name="review" required></textarea>
      <input type="submit" value="Submit Review">
    </form>

</body>
</html>