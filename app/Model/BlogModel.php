<?php
namespace App\Model;

class BlogModel {

    public static function insertData($title, $url , $text, $authorId): ?string {
        $pdo = Database::getDatabaseConnect();
        //created and updated at field will update with current timestamp
        $sql = "insert into blogpost (title, url, blogtext, status, authorid) values(:title,:url,:text, :status, :authorid)";
        $message = '';
        try {
            $handle = $pdo->prepare($sql);
            $params = [
                ':title' => $title,
                ':url' => $url,
                ':text' => $text,
                ':status' => 1,
                ':authorid' => $authorId
            ];

            $handle->execute($params);
            header('location:index.php');

        } catch (\PDOException $e) {

            error_log($e->getMessage(), 3, 'app.log');
            $message = "New Blog Post entry error:".$e->getMessage();
        }

        return $message;
    }

    public static function getPost(): array
    {

        try{
            $pdo = Database::getDatabaseConnect();
            $sql = "select * from blogpost where status='1' ORDER BY `created_at` DESC LIMIT 3";
            $handle = $pdo->prepare($sql);
            $handle->execute();
            return $handle->fetchall(\PDO::FETCH_ASSOC);

        }catch (\PDOException $e ) {
            error_log($e->getMessage(), 3, 'app.log');
        }

    }

    public static function getAuthorNameById(int $id): array
    {
        try{
            $pdo = Database::getDatabaseConnect();
            $sql = "select * from register where id=:id LIMIT 1";
            $handle = $pdo->prepare($sql);
            $params = ['id'=>$id];
            $handle->execute($params);
            return $handle->fetch();

        }catch (\PDOException $e ) {
            error_log($e->getMessage(), 3, 'app.log');
        }
    }

    public static function getPostById(int $id): array
    {
        try{
            $pdo = Database::getDatabaseConnect();
            $sql = "select * from blogpost where id=:id";
            $handle = $pdo->prepare($sql);
            $params = ['id'=>$id];
            $handle->execute($params);
            return $handle->fetch();

        }catch (\PDOException $e ) {
            error_log($e->getMessage(), 3, 'app.log');
        }

    }

}