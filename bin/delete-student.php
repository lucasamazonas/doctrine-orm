<?php

use App\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

$student = $entityManager->find(Student::class, $argv[1]);

$entityManager->remove($student);
$entityManager->flush();