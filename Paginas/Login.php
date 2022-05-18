<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../Assets/Css/Nav.css">
    <link rel="stylesheet" href="../Assets/Css/footer.css">
    <link rel="stylesheet" href="../Assets/Css/Login.css">
  </head>
  <body>
    <?php
      require "../Parciales/navIndex.php";
    ?>
    <div class="login-container" id="LoginContainer">
      <h1 class="title">Login</h1>
      <form action="" method="post">
        <div class="input-line-container">
          <span class="name-input">Username</span>
          <input type="text" name="username" class="input-line">
        </div>
        <div class="input-line-container">
          <span class="name-input">Password</span>
          <input type="password" name="password" class="input-line">
        </div>
        <input type="button" value="login" class="button-login">
      </form>
    </div>
    <?php
      require "../Parciales/Footer.php";
    ?>
  </body>
</html>
