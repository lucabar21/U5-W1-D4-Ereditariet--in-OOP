<?php
include_once __DIR__ . '/Prestito.php';

abstract class MaterialeBibliotecario implements Prestito
{
    public $titolo;
    public $annoPubblicazione;
    protected static $contatoreMateriali = 0;
    public function __construct($titolo, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->annoPublicazione = $annoPubblicazione;
    }
    public function presta()
    {
        if (static::$contatoreMateriali > 0) {
            static::$contatoreMateriali--;
        } else {
            echo 'Nessun materiale disponibile per il prestito.';
        }
    }
    public function restituisci()
    {
        static::$contatoreMateriali++;
    }
}