<?php
require_once __DIR__ . "../repository/db_connect.php";

abstract class CommentController {

    protected $params;
    protected $template = __DIR__ . './../Views/template.php';
    protected $viewsDir = __DIR__ . './../Views/';

    public function insertComment(Post $comment):void {
        print_r($comment);
        $infos = array(
            'id' => $comment['id'],
            'author' => $comment['author'],
            'publishDateTime' => $comment['publishDateTime']
        );
        $stmt = $pdo->prepare('
        INSERT INTO infos (id, author, publishDateTime)
        VALUES (:id, :author, :publishDateTime);
        ');
        $stmt->execute($infos);
    }
}
