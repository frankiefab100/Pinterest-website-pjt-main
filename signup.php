<?php define('TITLE', '| Signup'); ?>
<?php include('include/header.php'); ?>

<link rel="stylesheet" href="signin_up.css">
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="./img/pinterest-logo.png" alt="logo" />
    </div>
    <div class="title_signup">
      <h1>Welcome to Pinterest</h1>
      <p>Find new ideas to try</p>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

      <div class="input-field">
        <input type="email" name="email" id="email" placeholder="email">
        <br>
        <span><?php echo $error['email'] ?></span>
      </div>


      <div class="input-field">
        <input type="password" name="password" id="Password" placeholder="Password" />
        <br>
        <span><?php echo $error['password'] ?></span>
      </div>
      <div class="input-field">
        <input type="text" name="age" id="age" placeholder="Age" />
        <br>
        <span><?php echo $error['age'] ?></span>
      </div>

      <button type="submit" name="signup" class="btn sign">Continue</button>

      <div class="options">
        <p class="terms_conditions">By continuing, you agree to Pinterest's<a href="#">Terms of Service</a> and acknowledge you've read our <a href="#">Privacy Policy</a></p>
        <a href="login.php">Already a member ? Log in</a>
      </div>
    </form>
  </div>
</body>

</html>