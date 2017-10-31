<?php
$servername = getenv('IP');
$dbusername = getenv('C9_USER');
$dbpassword = "";
$database = "c9";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $dbusername, $dbpassword);
    
    // We should also probably use filter_input() to validate/sanitize this 
    // input just to be extra safe.
    $username = $_POST['username'];
    
    // First try this
    $sql = "SELECT * FROM users WHERE username='{$username}'";
    $result = $conn->query($sql);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    
    // Now uncomment the code below and try it instead of the above
    // Here we use the PDO libraries prepared statements and parameter binding
    // to help against SQL Injection attacks
    // $sql = "SELECT * FROM users WHERE username = :username";
    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
    // $stmt->execute();
    // $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page with SQL injection</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">Displaying the information for a user</h1>
            <p>Username: <?= $user['username']; ?></p>
            <p>Email: <?= $user['email']; ?></p>
            
            <div class="alert alert-info">By the way, this was the query that actually ran: <code><?= $sql; ?></code>. Notice anything bad? Try querying the <code>users</code> table in your database</p>
            <a href="sql-injection.php" class="btn btn-primary">Go back to form</a>
        </div>
    </body>
</html>