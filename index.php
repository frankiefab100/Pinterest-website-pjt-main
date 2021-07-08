<?php define('TITLE', '| Home'); ?>
<?php include('include/header.php'); ?>

<link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav class="top-nav">
      <span>
        <img id="logo" src="./img/pinterest-logo.png" alt="Pinterest logo" />
        <p class="logo-wordmark">Pinterest</p>
      </span>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Business</a></li>
        <li><a href="#">Blog</a></li>
        <?php if (empty($_SESSION['username'])) : ?>
          <li><a href="login.php" id="log-in">Log in</a></li>
          <li><a href="signup.php" id="sign-up">Sign up</a></li>
        <?php else : ?>
          <li><a href="index.php" class="signin_user">Welcome <?php echo $_SESSION['username']; ?></a></li>
          <li><a href="Logout.php" id="log-in">Log Out</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <main>
    <h1 class="home">
      Get your next <br />
      <span>new look outfit</span>
    </h1>
    <div class="bg-images">
      <img id="img1" src="./img/img1.jpg" alt="" />
      <img id="img2" src="./img/img2.jpg" alt="" />
      <img id="img3" src="./img/img3.jpg" alt="" />
      <img id="img4" src="./img/img4.jpg" alt="" />
      <img id="img5" src="./img/img5.jpg" alt="" />
      <img id="img6" src="./img/img6.jpg" alt="" />
      <img id="img7" src="./img/img7.jpg" alt="" />

      <img id="img8" src="./img/img1.jpg" alt="" />
      <img id="img9" src="./img/img7.jpg" alt="" />
    </div>

    <button id="scroll">></button>
  </main>

  <footer>
    <nav class="bottom-nav">
      <ul>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="##">Privacy Policy</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">iPhone App</a></li>
        <li><a href="#">Android App</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Collections</a></li>
        <li><a href="#">Explore</a></li>
      </ul>
    </nav>
  </footer>
</body>

</html>