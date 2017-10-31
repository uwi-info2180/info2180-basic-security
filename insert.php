<?php
$servername = getenv('IP');
$dbusername = getenv('C9_USER');
$dbpassword = "";
$database = "c9";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $dbusername, $dbpassword);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];

    // Try uncommenting the below 3 lines to filter/sanitize our form inputs and help
    // prevent XSS attacks
    // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // $password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);
    // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $createdAt = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO users (username, password, email, created_at) VALUES('{$username}', '{$password}', '{$email}', '{$createdAt}')";
    $conn->exec($sql);
} catch(Exception $e) {
    echo $e->getMessage();
}

// Redirect to users page
header('Location: users.php');
?>