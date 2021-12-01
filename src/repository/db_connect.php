<?php
try{
  $pdo = new PDO("mysql:host=db;port=3306;dbname=w3_habala;", "root", "example");
} catch (PDOException $e){
  die($e->getMessage());
}