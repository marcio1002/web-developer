<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="./src/assets/svg/web.svg">
    <link rel="stylesheet" href="./src/assets/css/style.css">
    <link rel="stylesheet" href="./src/assets/css/login.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Developer login</title>
  </head>
  <body>
    <section class="form-section">
      <div class="col-8">
        <h1><img src="./src/assets/svg/web2.svg" class="logo"/> Web developer</h1>
      </div>

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

    <script src="./src/assets/js/login.js"></script>
  </body>
</html>
