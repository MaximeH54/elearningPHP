<?php

use Controllers\Student;
use Controllers\Quiz;

// Charge les classes PHP (ne pas y toucher)
spl_autoload_register(function ($class) {
  $parts = explode('\\', $class);
  $className = array_pop($parts);
  $path = implode(DIRECTORY_SEPARATOR, $parts);
  $file = $className.'.php';
  require strtolower($path) . DIRECTORY_SEPARATOR . $file;
});

$params = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($params);

$route = $params[0];

if ($route === 'quiz') {
		$controller = new Quiz;
		$quizId = (int) $params[0];
		$controller->listQuiz();
		$controller->listStudent($quizId);
} else {
		$quizId = (int) $params[0];
		$controller = new Student;
		$controller->listStudent($quizId);
}

?>
