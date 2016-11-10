<!DOCTYPE html>
<html>
    <head>
        <title>Process and Output some information</title>
    </head>
    <body>
        <p>If you saw an alert popup when you add <code>&lt;script&gt;alert("hello world");&lt;/script&gt;</code> as a parameter in the query string of the URL. Then something bad happened.</p>
        <?php header('X-XSS-Protection: 0'); // something specific to turn off XSS Auditor in Chrome ?>
        <?= $_GET['username']; ?>
    </body>
</html>