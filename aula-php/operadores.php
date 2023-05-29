<?php
// Documento de estudo para as aulas de PHP

/* @Tipos de dados
 *
 * String : Texto;
 * Numero : 1..100;
 * > Integer : 1, 2, 3;
 * > Double 1.2 / 2.5 / 3.1;
 * Boolean : true/false | 1/0;
**/

$exemplo = "exemplo de texto";
$inteiro = 1;
$double = 1.0;
$boolean = false;

echo $exemplo . ":" . gettype($exemplo) . "<br/>";
echo $inteiro . ":" . gettype($inteiro) . "<br/>";
echo $double . ":" . gettype($double) . "<br/>";
echo $boolean . ":" . gettype($boolean) . "<br/>";

/* @Declaração de Variável
 * $variavel_tipo (Padrão para Array)
 * $variavelTipo (Padrão para variavel Normal)
 *
 * Ambas podem ser usado dependendo do padrão do projeto
 *
**/

/* @Tipadas / Não tipadas
 * Tipadas : O tipo da variável é definido e não pode ser alterado
 * Não tipadas : O tipo da variável é definido e pode ser alterado
 *
 * @Constantes
 *
**/

$cnpj = '000.000.000/0000-00';
echo $cnpj . "<br/>";
const conCnpj = "000.000.000/0000-00";
echo conCnpj . "<br/>";

// Outra forma de definir um valor é com define(1, 2), mas só pode ser usado fora de uma função
define("pi", 3.14);
echo pi;

/* @Operadores Globais
 *
 * + : Soma
 * - : Subtração
 * * : Multiplicação
 * / : Divisão
 * % : Módulo (Pega o restante de uma divisão)
 *
 * @Operadores de comparação
 *  == : Igualdade
 *  === : Identidade
 *  != : Diferente
 *  !== : Não identidade
 *  > : Maior que
 *  < : Menor que
 *  >= : Maior igual que
 *  <= : Menor igual que
 *
 * @Operadores Uniários
 *  ++ : Incremento
 *  -- : Decremento
 *  ! : Negação
 * ---------- *
 * + ("1") => 1 (Converte para inteiro)
 * + ("1.1") => 1.1 (Converte para double)
 * + ("teste") => 0 (String converte para inteiro = 0)
 * - (3) : -3 (Converte para negativo)
 * - (-4) => 4 (Converte para positivo)

 * @Operadores Binários ou Simplificadores
 * += : Soma e atribui
 * -= : Subtrai e atribui
 * *= : Multiplica e atribui
 * /= : Divide e atribui
 * %= : Módulo e atribui
 **/

$operacao = 10;
$operacao += 2; // output 12
$unitario = 0;

echo "<br/>" . $operacao . "<br/>";
echo ++$unitario . "<br/>"; // Pré-

for ($i = 0; $unitario<10;) {
    echo $unitario++ . "<br/>";
}

/* @Operadores Lógicos
 * && : E
 * || : Ou
 * ! : Negação
 *
 * @Operadores de String
 * . : Concatenação
 * .= : Concatenação e atribuição
**/

$idade = 12;
$mensagem = "Você é " . ($idade >= 18 ? "maior" : "menor") . " de idade";
echo $mensagem . "<br/>";