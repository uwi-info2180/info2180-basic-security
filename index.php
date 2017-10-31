<html>
    <head>
        <meta charset="utf-8">
        <title>Example Security Vulnerabilities</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    </head>
<body>
    <div class="container">
        <h1 class="page-header">Example Security Vulnerabilities</h1>
        <p>Here are some trivial examples of Security Vulnerabilities on the web.</p>
        <ul>
            <li><a href="process.php?username=<script>alert('youve been hacked')</script>">XSS Example 1</a></li>
            <li><a href="xss.php">XSS Example 2</a></li>
            <li><a href="csrf.php">CSRF Example</a></li>
            <li><a href="sql-injection.php">SQL Injection Example</a></li>
        </ul>
    </div>
</body>
</html>