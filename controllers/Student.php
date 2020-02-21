<?php
namespace Controllers;
use Models\Student AS ModelStudent;

class Student
{
	public function listStudent()
	{
		$model = new ModelStudent;
		$student = $model->getStudent();

		require('views/showStudent.php');
	}
}
