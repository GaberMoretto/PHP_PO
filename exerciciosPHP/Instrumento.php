<?php

 class Instrumento
{
    public string $nome;

    public function tocar(string $nome) 
 {
    $this ->nome = $nome;
    echo "O instrumento " . $this -> nome . " está sendo tocando";
 }
}

// teste de instrumento

$instrumentoUm = new Instrumento();
$instrumentoUm -> tocar("Guitarra");
echo $instrumentoUm ->nome;