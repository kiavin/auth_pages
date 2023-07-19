<?php
include 'database.class.php';
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "toor");
define("DB_NAME", "backbone");


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$database = new Database();

$database->query('INSERT INTO users (username, password, email, mobile) VALUES (:username, :password, :email, :mobile)');

$database->bind(':username', $username);
$database->bind(':password', $password);
$database->bind(':email', $email);
$database->bind(':mobile', $mobile);

$database->execute();
$message = "You have been registered successfully";

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
<h1><?php echo $message; ?></h1>
</body>
</html>
