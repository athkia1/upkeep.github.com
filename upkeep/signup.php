<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>
  <h2>Sign Up</h2>
  <form method="POST" action="signup.php">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
    // connect to the database
    require_once 'config.php';

    // check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      // insert the user's information into the database
      $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
      if ($conn->query($sql) === TRUE) {
        echo "User created successfully!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

    // close the database connection
    $conn->close();
  ?>
</body>
</html>
