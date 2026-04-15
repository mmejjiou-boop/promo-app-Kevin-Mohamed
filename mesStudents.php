<?php
require_once "bootstrap.php";

$studentRepository = $entityManager->getRepository("monProjet\Modele\Student");
$students = $studentRepository->findAll();

// Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', [
    'students' => $students
]);
