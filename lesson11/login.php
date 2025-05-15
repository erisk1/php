<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Digital School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
  <div class="login">

    <form class="form-signin" action="loginLogic.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>

      <small>Don't have account ? <a href="signup.php">Sign Up</a></small>

      <p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>
