<?php

require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Symphonie\Modele\Student;

$studentRepository = $entityManager->getRepository(Student::class);
$students = $studentRepository->findAll();

// Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', [
    'students' => $students
]);
