<html>
    <head>
        <meta charset="utf-8">
        <title>Example of XSS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
<body>
    <div class="container">
        <h1 class="page-header">Add User</h1>
        <form method="post" action="insert.php">
            <div class="alert alert-info">Try putting <code>&lt;script&gt;alert(\'some bad code\')&lt;/script&gt;</code> into the username or email field.</div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="e.g. ylynfatt" />
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" />
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" />
            </div>
            <input type="submit" value="Submit" class="btn btn-success "/>
        </form>
    </div>
</body>
</html>