<?php

//logout the session
session_start();

session_unset();

session_destroy();

//redirect back to homepage
header('location: index.php');
