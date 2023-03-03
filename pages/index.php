<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentication</title>

  <link rel="stylesheet" href="../styles/default.css">

  <link rel="stylesheet" href="../styles/login--modal.css">
</head>

<body>

  <div class="container">

    <header>
      <nav class="nav">
        <button class="button button--home">
          <a href="../pages/index.php" class="link">home</a>
        </button>
        <button class="button button--about">
          <a href="../pages/about.php" class="link">about</a>
        </button>
        <button class="button button--blogs">
          <a href="blogs.php" class="link">blogs</a>
        </button>
        <button class="button 
           button--contact">
          <a href="contact.php" class="link">contact</a>
        </button>
        <button class="button 
          button--profile" id="profile">
          <a href="#" class="link">profile</a>
        </button>
      </nav>
      <?php require_once 'profile--modal.php' ?>
    </header>

    <p>home page</p>

  </div>

<script src="../scripts/profile.js"></script>
</body>

</html>