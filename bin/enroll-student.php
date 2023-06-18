<?php

use App\Entity\Course;
use App\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

$studentId = $argv[1];
$courseId = $argv[2];

$student = $entityManager->find(Student::class, $studentId);
$course = $entityManager->find(Course::class, $courseId);

$student->enrolInCourse($course);

$entityManager->flush();