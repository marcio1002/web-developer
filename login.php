<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Developer login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <section class="form-section">
      <h1><img src="svg/web2.svg" />Web developer</h1>

      <div class="form-wrapper">
        <form>
          <div class="input-block">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" />
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input type="password" id="login-password" />
          </div>
          <button type="submit" class="btn-login">Login</button>
        </form>
      </div>
    </section>

    <ul class="squares"></ul>

    <script src="js/script.js"></script>
  </body>
</html>
