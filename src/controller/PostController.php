<?php
namespace App\controller;

use App\controller\BaseController;
use App\model\PostManager;


class PostController extends BaseController
{
    public function showPosts()
    {
        $manager = new PostManager();
        $posts = $manager->getPosts();
        var_dump($posts);
    }
}
