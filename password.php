<?php
// almeno 8 caratteri
// almeno un carattere numerico
// almeno una lettera maiuscola
// almeno un carattere speciale

// $password = readline('Inserisci la tua password: ');
// echo $password . "\n";

//! almeno 8 caratteri
//.length = strlen(), conta i caratteri di una stringa -> restituisce intero
// var_dump(strlen($password));

// if (strlen($password) >= 8) {
//     echo "Password accettata \n";
// } else {
//     echo "Password non accettata \n";
// }

function checkLength($string)
{
    if (strlen($string) >= 8) {
        // echo "Password accettata \n";
        return true;
    } else {
        // echo "Password non accettata \n";
        return false;
    }
}
// (scheckLength($password));

//! almeno un carattere numerico
// var_dump(is_numeric($password));
// for ($i = 0; $i < strlen($password); $i++) {
//     echo $password[$i] . " \n";
//     if (is_numeric($password[$i]) == true) {
//         echo "Ho trovato un numero \n";
//         break;
//     } else {
//         echo "carattere non numerico \n";
//     }
// }
function checkNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            // echo "Ho trovato un numero \n";
            return true;
        }
    }
    return false;
}
// (checkNumber($password));

//! almeno una lettera maiuscola
//ctype_upper - controlla se il text passato è in maiuscolo
// var_dump(ctype_upper($password));
// for ($i = 0; $i < strlen($password); $i++) {
//     if (ctype_upper($password[$i])) {
//         echo "maiuscola trovata \n";
//         break;
//     } else {
//         echo "non è maiuscola \n";
//     }
// }
function checkUpper($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    return false;
}

// (checkUpper($password));


//! almeno un carattere speciale
// $specials = ['!', '?', '*'];
// for ($i = 0; $i < strlen($password); $i++) {
//     if (in_array($password[$i], $specials)) {
//         echo "carattere speciale \n";
//         break;
//     } else {
//         echo "nessun carattere speciale \n";
//     }
// }
const SPECIALS = ['!', '?', '*'];
function checkSpecials($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], SPECIALS)) {
            return true;
        }
    }
    return false;
}
// (checkSpecials($password));

function checkPassword($string)
{
    $rule1 = checkLength($string);
    $rule2 = checkNumber($string);
    $rule3 = checkUpper($string);
    $rule4 =  checkSpecials($string);
    // var_dump($rule1, $rule2, $rule3, $rule4);
    // if ($rule1 && $rule2 && $rule3 && $rule4) {
    //     return true;
    // } else {
    //     return false;
    // }
    return checkLength($string) && checkNumber($string) && checkUpper($string) && checkSpecials($string);
}
// var_dump(checkPassword($password));

$i = 1;
do {
    $password = readline('Inserisci la tua password: ');
    $i++;
} while (checkPassword($password) == false && $i <= 5);



//! ESEMPIO STAMPA DELLE REGOLE NON RISPETTATE
function printRules($r1, $r2, $r3, $r4)
{
    if ($r1 == false) {
        echo "- Almeno 8 caratteri \n";
    }
    if ($r2 == false) {
        echo "- Almeno un numero \n";
    }
    if ($r3 == false) {
        echo "- Almeno una maiuscola \n";
    }
    if ($r4 == false) {
        echo "- Almeno un carattere speciale \n";
    }
}
printRules(checkLength($password), checkNumber($password), checkUpper($password), checkSpecials($password));
