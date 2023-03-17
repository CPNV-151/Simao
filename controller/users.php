<?php

require "./model/usersService.php";

$error = null;

function login($loginData){

    if(!isset($loginData['inputUserEmailAddress'])){
        require "view/login.php";
    }

    require "view/login.php";
}

