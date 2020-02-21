<?php
namespace Controllers;
use Models\Quiz AS ModelQuiz;
use Models\Student AS ModelStudent;

class Quiz
{
	public function listQuiz()
	{
		$model = new ModelQuiz;
		$quiz = $model->getQuiz();

		require('views/showQuiz.php');
	}

	public function listStudent($quizId)
	{
		$model = new ModelStudent;

		echo $quizId;
	}
}
