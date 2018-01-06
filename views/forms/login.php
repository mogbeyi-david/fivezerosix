<html>
<head>
    <title>Register</title>
    <script src="js/check.js"></script>
</head>
<body>
<form method="post" action="../../controllers/LoginController.php">
    <input name="username" type="text" placeholder="Username" ><br><br>

    <input name="password" id="password" type="password" placeholder="Password">
    <input type="checkbox" onclick="showPassword()"> Show Password<br><br>
    <input type="submit" name="login">
</form>
</body>
</html>