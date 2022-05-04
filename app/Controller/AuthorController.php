<?php
namespace App\Controller;


require ('../Model/AuthorModel.php');

use App\Model\Database;
use App\Model\AuthorModel;

class AuthorController {

    /**
     * This method will return all the authors
     * @param $data
     * @return string
     */

    public static function getAllAuthors(): array
    {
        return AuthorModel::getAllAuthors();

    }

}