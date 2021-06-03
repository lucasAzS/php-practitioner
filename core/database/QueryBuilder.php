<?php

class QueryBuilder
{
  protected $pdo;
  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }
  public function selectAll($table)
  {
    $statament = $this->pdo->prepare("select * from {$table}");

    $statament->execute();
    return $statament->fetchAll(PDO::FETCH_CLASS);
  }
}
