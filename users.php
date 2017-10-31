<?php
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $results = $conn->query("SELECT * FROM users");
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page with XSS from database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">List of users</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $user): ?>
                    <tr>
                        <td><?= $user['username']; // it's always good practice to at least use strip_tags(), htmlentities() or htmlspecialchars() to help against XSS attacks ?></td>
                        <td><a href="mailto:<?= $user['email']; ?>"><?= $user['email']; ?></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="xss.php" class="btn btn-primary">Go back to form</a>
        </div>
    </body>
</html>