<?php


/* @POO | Programação Orientada a Objetos
 *
 * classes e objetos:
 *
 * classe: A forma utilizada para moldar a receita do bolo
 * objetos: O bolo
 * --- --- --- --- ---
 * Propriedades === Variáveis,
 * Metodos === funções
 * */

class Casa {
    public $quartos;
    public $salas;
    public $cozinhas;
    public $banheiros;

    public function __construct($quartos, $salas, $cozinhas, $banheiros) {
        $this->quartos = $quartos;
        $this->salas = $salas;
        $this->cozinhas = $cozinhas;
        $this->banheiros = $banheiros;
    }

    public function tem_na_casa() {
        return $this->quartos . ' quartos, ' . $this->salas . ' salas, ' . $this->cozinhas . ' cozinhas, ' . $this->banheiros . ' banheiros';
    }
}

$casa = new Casa(2, 2, 1, 2);

/* @Method */

echo $casa->tem_na_casa() . "<br/>";

/* @__construct */

echo $casa->banheiros . " banheiros </br>";
echo $casa->cozinhas . " cozinhas </br>";
echo $casa->salas . " cozinhas </br>";
echo $casa->quartos . " banheiros <br/>";

