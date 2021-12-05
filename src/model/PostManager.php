<?php
namespace App\model;

use App\Entity\Post;

class PostManager extends BaseManager
{
    private $keys = "title, content, name, image_url, author_id, date";

    public function getPosts()
    {
        $query = $this->db->prepare('SELECT ' . $this->keys . ' FROM posts INNER JOIN users WHERE author_id = user_id');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Posts');
        return $query->fetchAll();
    }
}