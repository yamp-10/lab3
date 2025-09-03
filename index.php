<?php
require_once("src/IPublicable.php");
require_once("src/Autor.php");
require_once("src/libro.php");
require_once("src/revista.php");

$autorElenaWhite = new Autor("Elena G. de White", "Americana");
$autorGabrielGarcia = new Autor("Gabriel García Márquez", "Colombiano");
$autorJulioCortazar = new Autor("Julio Cortázar", "Argentino");
$autorMarioVargas = new Autor("Mario Vargas Llosa", "Peruano");

echo "Autor: " . $autor1->getInfo() . "\n";
echo "Autor: " . $autor2->getInfo() . "\n";
echo "Autor: " . $autor3->getInfo() . "\n";
echo "Autor: " . $autor4->getInfo() . "\n\n";

$libro1 = new Libro("Cien años de soledad", 1967, $autor2);
$libro2 = new Libro("Rayuela", 1963, $autor3);

$revista1 = new Revista("National Geographic", 2023, $autor1, "Mensual");
$revista2 = new Revista("Time", 2023, $autor4, "Semanal");

$publicables = [$libro1, $libro2, $revista1, $revista2];

foreach ($publicables as $item) {
    echo $item->getInfo() . "\n\n";
}