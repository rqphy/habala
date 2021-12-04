<?php

namespace App\model\PDO;
use PDO;

class PDOFactory
{
  private $db;

  public function __construct()
  {
    try
    {
      $this->db = new PDO('mysql:host=db;dbname=w2_blog', 'root', 'example');
    } catch (\PDOException $e)
    {
      die($e->getMessage());
    }
  }

  public function getDb()
  {
    return $this->db;
  }
}