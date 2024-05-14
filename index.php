<?php

include_once __DIR__ . '/Libro.php';
include_once __DIR__ . '/DVD.php';
include_once __DIR__ . '/MaterialeBibliotecario.php';

$Libro1 = new Libro('1984', 'George Orwell', 2004);
$Libro2 = new Libro('1984', 'George Orwell', 2004);
$Libro3 = new Libro('1984', 'George Orwell', 2004);

$Libro1->restituisci();
$Libro2->restituisci();
$Libro3->restituisci();
$Libro2->presta();


echo 'Il numero di libri presenti è: ' . Libro::contaLibri();

$DVD1 = new DVD('1984', 'George Orwell', 1984);
$DVD1->restituisci();
echo ' Il numero di DVD presenti è: ' . DVD::contaDVD();

