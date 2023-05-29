<?php

/* @author: GG
*
* Criar um formulário de cliente com dados
**/

$bs = "</br>";

class costumerData {
    public $name;
    public $years;
    public $color;
    public $dogs;

    public function __construct($name, $years, $color, $dogs) {
           $this->name = $name;
           $this->years = $years;
           $this->color = $color;
           $this->dogs = $dogs;
    }
};

$costumerInformation = new costumerData('Pedro Plinio ', 36, 'red', 3);

echo 'Nome: '. $costumerInformation->name . $bs . 'Idade: ' . $costumerInformation->years . $bs . 'Cor Favorita: ' . $costumerInformation->color . $bs . 'Cachorros: ' . $costumerInformation->dogs;

