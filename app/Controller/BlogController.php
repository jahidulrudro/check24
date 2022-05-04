<?php

namespace  App\Controller;

require ('../Model/BlogModel.php');

use App\Model\Database;
use App\Model\BlogModel;
use App\Helper;


class BlogController {

    public static function newPost($data): string
    {
        $pdo = Database::getDatabaseConnect();
        $postTitle = Helper::filterPostdata($data['title']);
        $imageUrl = filter_var($data['imageUrl'], FILTER_SANITIZE_URL);
        $postText = $data['postText'];
        $authorId = filter_var($data['authorId'], FILTER_VALIDATE_INT);

        if (empty($postTitle) || empty($postText) || empty($imageUrl)) {
            return "required filed should not be empty";
        }

        $message =  BlogModel::insertData($postTitle, $imageUrl,$postText, $authorId);

        return $message;

    }

    public  static function getPost(): array
    {
        return  BlogModel::getPost();

    }

    public static function getAuthorNameById(int $id): string
    {
        $result = BlogModel::getAuthorNameById($id);
        return $result['fullname'];

    }

    public static function getPostById(int $id): array
    {
        return BlogModel::getPostById($id);
    }


}