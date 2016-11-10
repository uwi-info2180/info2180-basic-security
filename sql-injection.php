<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SQL Injection Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">SQL Injection Example</h1>
            <p>For this example, we will try to do an SQL Injection attack by entering the following into our username field:</p>
            <code>ylynfatt'; DROP TABLE users;--</code>
            <form action="getuser.php" method="post">
                <div class="form-group">
                    <label for="username">Enter the user's username</label>
                    <input type="text" name="username" id="username" class="form-control" />
                </div>
                <input type="submit" class="btn btn-success" value="Get user details"/>
            </form>
        </div>
    </body>
</html>