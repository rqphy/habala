<?php
require_once __DIR__ . "../repository/db_connect.php";

abstract class UserController {

    protected $params;
    protected $template = __DIR__ . './../Views/template.php';
    protected $viewsDir = __DIR__ . './../Views/';

    public function inserUser(Post $user):void {
        print_r('$user');
        $infos = array(
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'hashedPassword' => $user['hashedPassword'],
            'isAdmin' => $user['isAdmin'],
        );
        $stmt = $pdo->prepare('
        INSERT INTO infos (id, username, email, hashedPassword, isAdmin)
        VALUES (:id, :username, :email, :hashedPassword, :isAdmin);
        ');
        $stmt->execute($infos);
    }
}
