<?php
require_once("Author.php");

class ImprimirAutor {
    public function getInfo(Author $autor): void {
        echo "Nombre: " . $autor->getName() . "\n";
        echo "Edad: " . $autor->getAge() . "\n";
        echo "Email: " . $autor->getEmail() . "\n";
    }
}
