<?php

/* @Métodos_e_Validações
 * If / else if / Switch
 *
 **/

//if

$minhaIdade = 19;

if($minhaIdade < 18) {
    echo "você é menor de idade" . "<br/>";
} else {
    echo "você é maior de idade" . "<br/>";
}

// switch

$dia = "ensolarado";
$mensagem = "O dia está";

switch ($dia){
    case "limpo":
    case "ensolarado":
        echo $mensagem . " Bom" ."<br/>";
        break;
    case "chuvoso":
    case "tempestade":
        echo $mensagem . " Ruim" . "<br/>";
        break;
    default:
        echo "Sem informação <br/>";
}

// while

$contador = 0;

while ($contador <= 10) {
    echo $contador . "<br/>";
    $contador++;
}

//for

for($i = 0; $i <= 10; $i++){
    echo $i . "<br/>";
}

//dowhile

$value = 0;

do {
    echo $value . "<br/>";
    $value++;
} while ($value <= 10);

// array

$array = array('php', 'html', 'js', 'css', 'mysql');
var_dump($array) . "<br/>"; // quando for array usar var_dump
echo $array[1];

for($i = 0; $i < count($array); $i++){
    echo "<br/>" . $array[$i] . "<br/>";
}

//foreach

$animal = array(
    "nome" => "Bolt",
    "tipo" => "Cachorro",
    "idade" => 2,
    "cor" => "Branco"
);

echo "O tamanho do meu array é: ". count($animal) . "<br/>";

foreach ($animal as $animal_info) {
    echo $animal_info . "<br/>";
}


foreach ($animal as $animal_info => $value) {
  echo $animal_info . " : " . $value . "<br/>";
};

// functions

function funcao_de_somar() {
    $minhaSoma = (2 + 2);
    echo "Minha função de somar" . $minhaSoma . "<br/>";
};

funcao_de_somar();

// functions with parameters and return

function somar($a, $b) {
    return $a + $b;
};

$valoTotal = somar(2, 2);
echo $valoTotal . "<br/>";




