<?php

use App\Entity\Course;
use App\Entity\Phone;
use App\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $students */
$students = $studentRepository->findAll();

foreach ($students as $student) {
    echo "Student: " . $student->id . ' - ' . $student->name . PHP_EOL;
    echo "Phones: " . implode(', ', $student->phones()->map(fn(Phone $phone) => $phone->number)->toArray()) . PHP_EOL;
    echo "Course: " . implode(', ', $student->courses()->map(fn(Course $course) => $course->name)->toArray()) . PHP_EOL;

    echo PHP_EOL;
}