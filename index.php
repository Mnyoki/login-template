<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentication</title>

  <link rel="stylesheet" href="styles/home.css">
  <link rel="stylesheet" href="styles/login--modal.css">
</head>
<body>

  <div class="container">

      <header>
        <nav class="nav">
          <button class="button button--home">
            <a href="index.php" class="link">home</a>
          </button>
          <button class="button button--register" id="register">
            <a href="#" class="link">register</a>
          </button>
          <button class="button button--login" id="login">
            <a href="pages/index.php" class="link">login</a>
          </button>
        </nav>

        <?php require_once 'pages/logins.php' ?>
      </header>

      <p>trying to get out of the hood</p>

  </div>
  

  <script src="scripts/login.js"></script>
</body>
</html>