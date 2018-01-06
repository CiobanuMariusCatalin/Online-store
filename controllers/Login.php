<?php

require_once('../vendor/autoload.php');
require_once('../models/LoginForm.php');
use models\LoginForm;

$loginForm = new LoginForm($_POST);
if( $loginForm->isValid() &&  $loginForm->login()) {
    require_once('/controllers/Home.php');
    die();
}

$errors = $loginForm->getErrors();

require_once('../view/Login.php');