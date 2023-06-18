<?php

use App\Entity\Phone;
use App\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

$student = new Student("Lucas Amazonas");
$student->addPhone(new Phone('92991743355'));
$student->addPhone(new Phone('92991743355'));

$entityManager->persist($student);
$entityManager->flush();