<?php define('TITLE', '| Sign in'); ?>
<?php include('include/header.php'); ?>

<link rel="stylesheet" href="signin_up.css">
</head>


<body>
    <div class="container">
        <div class="logo">
            <img src="./img/pinterest-logo.png" alt="logo" />
        </div>
        <div class="title_login">
            <h1>Welcome to Pinterest</h1>
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
            <p>
                <a class="forgetPassword" href="forgetpassword.php">Forget Your Password ? </a>
            </p>
            <button type="submit" name="login" class="btn login">Log in</button>


            <div class="options">
                <p class="terms_conditions">By continuing, you agree to Pinterest's<a href="#">Terms of Service</a> and acknowledge you've read our <a href="#">Privacy Policy</a></p>
                <a href="signup.php">Not on pininterest yet ? Sign Up</a>
            </div>
        </form>
    </div>
</body>

</html>