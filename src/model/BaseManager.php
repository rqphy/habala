<?php

namespace App\model;

use App\Model\PDO\PDOFactory;

class BaseManager
{
  protected $db;

  public function __construct()
  {
    $pdo = new PDOFactory();
    $this->db = $pdo->getDb();
  }
}