<?php

use App\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

$course = new \App\Entity\Course($argv[1]);


$entityManager->persist($course);
$entityManager->flush();