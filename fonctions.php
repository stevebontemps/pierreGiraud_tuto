<?php

    function addition($a,$b){

        return $a + $b ;

    }
    
    function soustraction($a,$b){

        return $a - $b ;
    }

    function multiplication($a,$b){

        return $a * $b;
    }

    function compterJusquaDix($i){

        $maChaine = "";

        if($i > 10){
            return $maChaine = $maChaine . " erreur , $i est superieur a 10";
        }
        else{

            for ($i;$i<=10;$i++){
                $maChaine = $maChaine . $i . "\r\n";
            }

            return $maChaine ;
        }
    }

    echo "mes additions : ";
    echo "\r\n";
    echo "1 + 3 = " . addition(1,3);
    echo "\r\n";
    echo "4 + 2 = " . addition(4,2);
    echo "\r\n";
    echo "mes soustraction : ";
    echo "\r\n";
    echo "1 - 3 = " . soustraction(1,3);
    echo "\r\n";
    echo "4 - 2 = " . soustraction(4,2);
    echo "\r\n";
    echo "mes multiplications : ";
    echo "\r\n";
    echo "1 * 3 = " . multiplication(1,3);
    echo "\r\n";
    echo "4 * 2 = " . multiplication(4,2);
    echo "\r\n";
    echo "\r\n";
    echo compterJusquaDix(20) . "\r\n";
    echo compterJusquaDix(5) . "\r\n";
    ?>
