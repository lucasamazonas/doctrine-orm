<?php

use App\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

$student = new Student($argv[1]);

$entityManager->persist($student);
$entityManager->flush();