<?php
namespace Models;

class Quiz
{
  public function getQuiz()
  {
		$db = new \PDO('mysql:dbname=exam_projet;host=localhost', 'root', 'Heykys9EKvWpkORN');
    $stmt = $db->prepare('SELECT * FROM quiz');
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
