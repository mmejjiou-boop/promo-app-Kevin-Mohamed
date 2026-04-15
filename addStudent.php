<?php

require_once "bootstrap.php";
require_once "vendor/autoload.php";

use Symphonie\Modele\Student;

// si le formulaire est envoyé
if (isset($_POST['submit'])) {

    $student = new Student();
    $student->setName($_POST['name']);
    $student->setAge($_POST['age']);
    $student->setBio($_POST['bio']);

    $entityManager->persist($student);
    $entityManager->flush();

    // retour vers la liste
    header("Location: mesStudents.php");
    exit;
}

// Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('create.html');
