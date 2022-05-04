<?php
namespace App\Model;

class AuthorModel
{
    public static function getAllAuthors(): array
    {
        try {
            $pdo = Database::getDatabaseConnect();
            $sql = "select `fullname` from register";
            $handle = $pdo->prepare($sql);
            return $handle->fetchAll(\PDO::FETCH_ASSOC);

        } catch (\PDOException $e) {
            error_log($e->getMessage(), 3, 'app.log');
        }

    }
}