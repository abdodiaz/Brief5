<?php require __DIR__ . "/../../../mvc/url.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo style.'style.css';?>">
<!------ Include the above in your HEAD tag ---------->
    <title>Login</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo icon.'user.png';?>"  id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="Post" action="Login/connected">
      <input type="text" id="login" class="fadeIn second" name="Email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="Password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="subs" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="Register">Register</a>
    </div>
  </div>
</div>
</body>
</html>