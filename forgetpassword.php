<?php define('TITLE', '| ResetPassword'); ?>
<?php include('include/header.php'); ?>

<link rel="stylesheet" href="signin_up.css">
</head>


<body>
    <div class="container">
        <div class="logo">
            <img src="./img/pinterest-logo.png" alt="logo" />
        </div>
        <div class="title_login">
            <h1>Let's find your Pinterest account</h1>
            <span>What’s your email?</span>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="email">
                <button type="submit" name="search" class="search">Search</button>
                <span><?php echo $error['email'] ?></span>
            </div>

        </form>
    </div>
</body>

</html>