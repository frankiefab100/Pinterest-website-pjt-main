<?php

//database connection
include('server/Database/connect.php');

//Start session
session_start();

$email = $password = $age = '';

$error = array('email' => '', 'password' => '', 'age' => '');

$table = 'user';

if (isset($_POST['signup'])) {
    if (empty($_POST['email'])) {
        $error['email'] = 'Email is required!';
    } else {
        $email = clean_input($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Invalid email format';
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Password is required!';
    } else {
        $password = clean_input($_POST['password']);
        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
            $error['password'] = 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.';
        }
    }

    if (empty($_POST['age'])) {
        $error['age'] = 'Age is required!';
    } else {
        $age = clean_input($_POST['age']);
        if ($age < 10) {
            $error['age'] = 'Age canot be less than 10';
        }
    }

    if (!empty($email) && !empty($password) && !empty($age)) {

        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        global $conn;

        $sql = "INSERT INTO $table (email, password, age) VALUES (:email,:password, :age)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hash_password);
        $stmt->bindParam(':age', $age);

        $stmt->execute();

        header('location:login.php');
    }
}


if (isset($_POST['login'])) {
    if (empty($_POST['email'])) {
        $error['email'] = 'Email is required!';
    } else {
        $email = clean_input($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Password is required!';
    } else {
        $password = clean_input($_POST['password']);
    }

    if (!empty($email) && !empty($password)) {

        $loginDetails = [
            'email' => $email
        ];

        $sql = "SELECT * FROM $table WHERE email=:email";
        $stmt = $conn->prepare($sql);
        $stmt->execute($loginDetails);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = strstr($user['email'], '@', true);
            header('location:index.php');
        } else {
            echo 'Password is not correct';
        }
    }
}



function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
