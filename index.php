<?php 
// ENG

// Modify the kebabize function so that it converts
// a camel case string into a kebab case.

// "camelsHaveThreeHumps"  -->  "camels-have-three-humps"
// "camelsHave3Humps"  -->  "camels-have-humps"
// "CAMEL"  -->  "c-a-m-e-l"

// Notes:

// the returned string should only contain lowercase letters


//RUS

// Измените функцию kebabize таким образом, 
// чтобы она преобразовывала строку в верблюжьем регистре
// в шашлычный регистр))

// "camelsHaveThreeHumps"  -->  "camels-have-three-humps"
// "camelsHave3Humps"  -->  "camels-have-humps"
// "CAMEL"  -->  "c-a-m-e-l"

// Примечания:

// возвращаемая строка должна содержать только строчные буквы


function kebabize($string) {
    $a = [];
    $str = '';

    for($i = 0; $i < strlen($string); $i++) {
        if(is_numeric($string[$i])){
            continue; 
        } 

        if(ctype_upper($string[$i])) {
            if($str){
                array_push($a, $str);
                $str = strtolower($string[$i]);
            }
            else
            {
                $str = strtolower($string[$i]);
            }
        } 
        else
        {
            $str .= $string[$i];
        }
    }

    if($str) {
        array_push($a, $str); 
    }

    return implode('-', $a);
}

var_dump(kebabize("86e1zrOR00"));


// BEST PRACTICES

// function kebabize($string) {
//     return strtolower(preg_replace(['/[^a-zA-Z]/', '/([A-Z])/', '/^-/'], ['', '-$1', ''], $string));
// }

