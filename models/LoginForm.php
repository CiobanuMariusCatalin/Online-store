<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace models;

require_once('../helpers/ValidationHelpers.php');

use helpers\ValidationHelpers;

/**
 * Description of LoginForm
 *
 * @author cash0151
 */
class LoginForm {

    private $email;
    private $password;

    function __construct($inputArray) {
        //self::__construct();



        $email = isset($inputArray['email']) ? 
            filter_var($inputArray['email'], FILTER_SANITIZE_EMAIL) :
            '';
        $password = isset($inputArray['email']) ? 
            filter_var($inputArray['password'], FILTER_SANITIZE_STRING)
            :'';

        $this->email = $email;
        $this->password = $password;
    }

    private $errors = [];

    function isValid() {

        $email = $this->email;
        $password = $this->password;

        ValidationHelpers::isRequired($email, 'email', $this->errors);
        ValidationHelpers::isRequired($password, 'password', $this->errors);

        if (count($this->errors) > 0) {
            return false;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Invalid Email';
        }

        return false;
    }

    function login() {
        return false;
    }

    function getErrors() {
        return $this->errors;
    }

}
