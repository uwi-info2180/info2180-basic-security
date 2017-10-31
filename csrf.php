<?php
session_start();
// Uncomment the code below to use CSRF tokens to help prevent a CSRF attack
// $csrf_token = crypt(uniqid(rand(), TRUE));
// $_SESSION['csrf_token'] = $csrf_token;
// $_SESSION['csrf_token_time'] = time();
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
            <h1 class="page-header">Transfer Money from One account to another</h1>
            <div class="alert alert-info">Complete the fields below to transfer money to and from your accounts.</div>
            <form action="transfer.php" method="post">
                <!-- change the form method from get to post -->
                <!-- uncomment the hidden input field below to use the generated csrf token -->
                <!--<input type="hidden" name="csrf_token" value="<?= $csrf_token ?>" />-->
                <div class="form-group">
                    <label for="transfer-from">Transfer From</label>
                    <select name="transfer_from" id="transfer-from" class="form-control">
                        <option value="AB12345">AB12345</option>
                        <option value="XY09876">XY09876</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="transfer-to">Transfer To</label>
                    <select name="transfer_to" id="transfer-to" class="form-control">
                        <option value="AB12345">AB12345</option>
                        <option value="XY09876">XY09876</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="amount">Amount to Transfer</label>
                    <input type="number" id="amount" name="amount" step=".01" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <p><a href="somebadpage.php" class="btn btn-danger">Visit a Harmless website</a></p>
        </div>
    </body>
</html>