<?php
require_once("Autor.php");
require_once("IPublicable.php");

class Revista implements IPublicable {
    private string $title;
    private int $year;
    private Autor $autor;
    private string $periodicity;

    public function __construct(string $title, int $year, Autor $autor, string $periodicity) {
        $this->title = $title;
        $this->year = $year;
        $this->autor = $autor;
        $this->periodicity = $periodicity;
    }

    public function getInfo(): string {
        return "Revista: {$this->periodicity} -- {$this->title} ({$this->year}) - " . $this->autor->getInfo();
    }
}