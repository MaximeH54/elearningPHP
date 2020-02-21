<?php
namespace Models;

class Student
{
  public function getStudent()
  {
		$db = new \PDO('mysql:dbname=exam_projet;host=localhost', 'root', 'Heykys9EKvWpkORN');
    $stmt = $db->prepare('SELECT * FROM student');
    $stmt->execute();
    return $stmt->fetchAll();
  }

	public function getStudentByQuiz($quizId)
	{
		$db = new \PDO('mysql:dbname=exam_projet;host=localhost', 'root', 'Heykys9EKvWpkORN');
		$stmt = $db->prepare('SELECT * FROM student');
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
