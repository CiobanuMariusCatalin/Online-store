<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace helpers;

class ValidationHelpers {

    static function isRequired($input,$inputName ,&$errors) {
        if(!isset($input) || empty($input)) {
            $errors[$inputName] = 'Is required';
        }
    }

}
