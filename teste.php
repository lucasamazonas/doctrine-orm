<?php

require_once __DIR__.'/vendor/autoload.php';

$entityManager = \App\Helper\EntityManagerCreator::createEntityManager();

var_dump($entityManager);