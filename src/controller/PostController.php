<?php
abstract class PostController {

    protected $params;
    protected $template = __DIR__ . './../Views/template.php';
    protected $viewsDir = __DIR__ . './../Views/';

    public function writePost(Post $post):void {
        print_r('$post');
        $infos = array(
            'id' => $post['id'],
            'imageUrl' => $post['imageUrl'],
            'title' => $post['title'],
            'content' => $post['content'],
            'author' => $post['author'],
            'publishDateTime' => $post['publishDateTime']
        );
        $stmt = $pdo->prepare('
        INSERT INTO infos (id, imageUrl, title, content, author, publishDateTime)
        VALUES (:id, :imageUrl, :title, :content, :author, :publishDateTime);
        ');
        $stmt->execute($infos);
    }
}
