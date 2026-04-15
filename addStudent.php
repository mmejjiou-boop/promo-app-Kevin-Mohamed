<?php
require_once "bootstrap.php";

use monProjet\Modele\Student;

// si le formulaire est envoyé
if (isset($_GET['ajouter'])) {

    $student = new Student();
    $student->setName($_GET['name']);
    $student->setAge($_GET['age']);
    $student->setBio($_GET['bio']);

    $entityManager->persist($student);
    $entityManager->flush();

    // retour vers la liste
    header("Location: mesStudents.php");
}

// Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('create.html');
