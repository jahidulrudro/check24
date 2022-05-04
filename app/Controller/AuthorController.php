<?php
namespace App\Controller;


require ('../Model/AuthorModel.php');

use App\Model\Database;
use App\Model\AuthorModel;

class AuthorController {

    public static function getAllAuthors(): array
    {
        return AuthorModel::getAllAuthors();

    }

}