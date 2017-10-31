<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Process and Output some information</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">Simple XSS via URL parameter</h1>
            <p>If you saw an alert popup when you add <code>&lt;script&gt;alert("hello world");&lt;/script&gt;</code> as a parameter in the query string of the URL. Then something bad happened.</p>
            <?php //header('X-XSS-Protection: 0'); // something specific to turn off XSS Auditor in Chrome ?>
            <?= $_GET['username']; // Try using the PHP strip_tags() or htmlentities() functions to help against XSS attack ?>
        </div>
    </body>
</html>