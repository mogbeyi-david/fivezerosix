<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login and Register</title>
  
  
  
      <link rel="stylesheet" href="views/css/login.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="controllers/RegisterController.php">
      <input type="text" placeholder="username" name="username"/>
      <input type="text" placeholder="Email Address" name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <button name="register">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="controllers/LoginController.php">
      <input type="text" placeholder="email" name="email"/>
      <input type="password" placeholder="password" name="password"/>
      <button name="login">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="views/js/login.js"></script>

</body>
</html>
