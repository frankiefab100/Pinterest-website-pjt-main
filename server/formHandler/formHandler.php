<?php

#include function for validation
include('server/formValidation/formValidation.php');


if (isset($_POST['register'])) {
    echo print_r($_POST, true);
    die();
}
