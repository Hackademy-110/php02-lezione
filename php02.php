<?php
//! dichiarare - USER FUNCTION

function nomefunzione($parametriFormali)
{
    //istruzioni - RETURN 
}
//! e richiamare - invocazione

//nomefunzione($parametriReali);

function saluta()
{
    echo 'ciao';
}
// saluta();

//! PARAMETRI
// function sum()
// {
//     echo 4 + 3;
// }

//parametri formali
// PARAMETRI DI DEFAULT
function sum($n = 1, $n1 = 2, $n3 = 0)
{
    echo $n + $n1 + $n3 . "\n";
}
//sum(5, 4, 1); //!DEVE avere i parametri reali - assegnati per posizione
//sum(5, 2, 0);

//sum(1);

// function presentati($nome, $cognome)
// {
//     echo "Ciao sono $nome $cognome \n";
// }
// presentati("caldarulo", "annalisa");

//! SCOPE - visibilita
// let x = 2;

// function print(){
//     console.log(x);
// }
// print();

//in PHP le variabili hanno scope LOCALE

$number = 4;
// echo $number;
const NUM = 4; // SCOPE GLOBALE, "super globals"

function printNumber($num)
{
    // $number = 3;
    echo $num;
    echo NUM;
}

// printNumber($number);

//! PASSAGGIO PER VALORE - la funzione manipola una COPIA del valore della variabile, NON SI SOVRASCRIVE
$x = 5;

function increment(&$n)
{
    $n = $n + 1;
    // echo $n . " \n";
   return  $n;
}
echo "il valore di x prima della funzione è $x \n"; //5
$numero = increment($x); //6
echo "il valore di x dopo la funzione è $x \n"; //5 - 6

echo $numero - 27;
//! passaggio per riferimento (&) - riferimento alla locazione di memoria stessa in cui è salvata la variabile

//! PARAMETRI VARIABILI
function somma(...$array) //spread operator -> si salva in un array
{
    // var_dump($array);
    $result = 0;
    foreach ($array as $number) {
        // echo "result:".  $result . "\n";
        // echo "number:". $number . "\n";
        $result = $result + $number;
        // echo "result finale" . $result . "\n";

    }
    echo $result;
}
// somma(1, 2, 3);

function sommaReduce(...$numbers)
{

    $result = array_reduce($numbers, function ($acc, $num) {
        return $acc += $num;
    });
    return $result;
}

$risultato = sommaReduce(5, 6, 7);

function sumEcho($x, $y)
{
    $x + $y . "\n";
}
function sumReturn($x, $y)
{
    return $x + $y;
}
$sum = sumEcho(1, 2);
// echo $sum + 100;
// $sum1 =sumReturn(1, 2);

var_dump($sum);
// var_dump($sum1);
