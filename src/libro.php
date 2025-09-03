<?php
require_once("IPublicable.php");
require_once("Autor.php");

class Libro implements IPublicable {
    private string $titulo;
    private int $año;
    private Autor $autor;

    public function __construct(string $titulo, int $año, Autor $autor) {
        $this->titulo = $titulo;
        $this->año = $año;
        $this->autor = $autor;
    }

    public function getInfo(): string {
        return "Libro: {$this->titulo} ({$this->año}) - " . $this->autor->getInfo();
    }
}
