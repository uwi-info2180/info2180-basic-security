<?php
$servername = getenv('IP');
$dbusername = getenv('C9_USER');
$dbpassword = "";
$database = "c9";
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $dbusername, $dbpassword);
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $createdAt = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO users (username, password, email, created_at) VALUES('{$username}', '{$password}', '{$email}', '{$createdAt}')";
    // $sql = "INSERT INTO users (username, password, email, created_at) VALUES('{$_POST['username']}', SHA2('testing', 256), 'test@test.com', SYSDATE())";
    //echo $sql;
    $conn->query($sql);
} catch(Exception $e) {
    echo $e->getMessage();
}

// Redirect to users page
header('Location: users.php');
?>