<?php

namespace App\Model;

class AuthModel
{

    public static function register($fullName,$email, $password)
    {
        $pdo = Database::getDatabaseConnect();

        try {
            if (self::checkUserAlreadyExistsOrNot($email)) {
                return "Email already Exists";
            }

            $hashPassword = password_hash($password, PASSWORD_BCRYPT);

            $sql = "insert into register (fullname, email, `password`, status) values(:fullName,:email,:pass, 1)";

            try {
                $handle = $pdo->prepare($sql);
                $params = [
                    ':fullName' => $fullName,
                    ':email' => $email,
                    ':pass' => $hashPassword,
                ];

                $handle->execute($params);

                $message = 'User has been created successfully';

            } catch (PDOException $e) {

                error_log($e->getMessage(), 3, 'app.log');
            }

        } catch (\Exception $e) {
            error_log($e->getMessage(), 3, 'app.log');
        }

        return $message;
    }


    private static function checkUserAlreadyExistsOrNot(string $email): bool
    {
        $pdo = Database::getDatabaseConnect();
        $sql = 'select * from register where email = :email';
        $stmt = $pdo->prepare($sql);
        $p = ['email' => $email];
        $stmt->execute($p);

        if ($stmt->rowCount() != 0) {
            return true;
        }

        return false;
    }

    public static function login($email, $password): ?string
    {
        $pdo = Database::getDatabaseConnect();
        $sql = "select * from register where email = :email AND status='1'";
        $handle = $pdo->prepare($sql);
        $params = ['email'=>$email];
        $handle->execute($params);
        if($handle->rowCount() > 0) {
            $getRow = $handle->fetch(\PDO::FETCH_ASSOC);
            if (password_verify($password, $getRow['password'])) {
                unset($getRow['password']);
                $_SESSION = $getRow;
                header('location:index.php');
            }else{
                return "Email address or password is not correct";
            }
        }

        return "Login is invalid";
    }
}