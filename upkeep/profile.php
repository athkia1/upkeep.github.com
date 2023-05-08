<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

include 'config.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn,$sql);

if($result && mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome <?php echo $name; ?></title>
</head>
<body>
    <h2>Welcome <?php echo $name; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>
