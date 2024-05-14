<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';

class DVD extends MaterialeBibliotecario
{
    static $contatoreMateriali = 0;
    public $regista;

    public function __construct($titolo, $regista, $annoPubblicazione)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $regista;
    }

    public static function contaDVD()
    {
        return self::$contatoreMateriali;
    }
}