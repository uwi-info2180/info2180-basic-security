<?php
session_start();
setlocale(LC_MONETARY, 'en_US.UTF-8');
print $_SESSION['csrf_token'] . '<br>';
print $_POST['csrf_token'];

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";

// We should also probably use filter_input() to validate/sanitize this 
// input just to be extra safe.
$transferFrom = $_GET['transfer_from'];
$transferTo = $_GET['transfer_to'];
$amount = $_GET['amount'];

// Uncomment the code below to use POST request instead of a GET request above.
// $transferFrom = $_POST['transfer_from'];
// $transferTo = $_POST['transfer_to'];
// $amount = $_POST['amount'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    
    $accountFrom = $conn->query("SELECT * FROM bank_accounts WHERE account_number = '{$transferFrom}'")->fetch(PDO::FETCH_ASSOC);
    $accountTo = $conn->query("SELECT * FROM bank_accounts WHERE account_number = '{$transferTo}'")->fetch(PDO::FETCH_ASSOC);
    
    $accountFromBalance = (float) $accountFrom['balance'] - (float) $amount;
    $accountToBalance = (float) $accountTo['balance'] + (float) $amount;

    $conn->query("UPDATE bank_accounts SET balance = {$accountFromBalance}, updated_at = SYSDATE() WHERE account_number = '{$transferFrom}'");
    $conn->query("UPDATE bank_accounts SET balance = {$accountToBalance}, updated_at = SYSDATE() WHERE account_number = '{$transferTo}'");
} catch(Exception $e) {
    echo $e->getMessage();
}

// Wrap the above try/catch statement with the code below
// to can check the CSRF token to see if it is valid before we proceed
// to transfer any money. This helps to ensure the request takes place on 
// our website and not on some other bad site elsewhere.
// if ($_POST['csrf_token'] == $_SESSION['csrf_token']) {
//     // do the updating of the account info
// } else {
//     echo 'You are stealing!';
// }

// You could also check the token time and not allow any tokens over a certain
// age
// $token_age = time() - $_SESSION['token_time'];
 
// if ($token_age <= 300)
// {
//     /* Less than five minutes has passed. */
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSRF Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">Transfer Complete!</h1>
            <p class="alert alert-success">Money was transferred from account <strong><?= $accountFrom['account_number'] ?></strong> to <strong><?= $accountTo['account_number'] ?></strong> for the sum of <strong><?= money_format('%.2n', $amount) ?></strong>.</p>
            <a href="csrf.php" class="btn btn-primary">Transfer more money!</a>
        </div>
    </body>
</html>