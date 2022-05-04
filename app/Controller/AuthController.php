<?php

namespace App\Controller;


require ('../Model/AuthModel.php');
require ('../Model/Database.php');

use App\Model\Database;
use App\Model\AuthModel;
use App\Helper;

class AuthController
{

    public static function register(array $data): string
    {

        $fullName = Helper::filterPostdata($data['fullName']);
        $userName = Helper::filterPostdata($data['userName']);
        $email = Helper::filterPostdata($data['email']);
        $password = Helper::filterPostdata($data['password']);

        if (empty($fullName) || empty($userName) || empty($email) || empty($password)) {
            return "required filed should not be empty";
        }

        if (!Helper::validateEmail($email)) {
            return "Email address is not Valid";
        }

        if ($password !== $_POST['confirmPassword']) {
            return "Password confirm password should be match";
        }


       $message =  AuthModel::register($fullName, $userName, $email,$password);

       return $message;
    }

    public static function login( array $data) : bool
    {
        $email = Helper::filterPostdata($_POST['email']);
        $password = Helper::filterPostdata($_POST['password']);

        if (empty($email) || empty($password)) {
            return "required filed should not be empty";
        }

        if (!Helper::validateEmail($email)) {
            return "Email address is not Valid";
        }
        

    }

}