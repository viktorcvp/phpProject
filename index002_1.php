<?php
$ege = (int)readline("В каком году произошло крещение Руси?
Варианты: 810, 990 или 740 год:");

 if ($ege !== 810 && $ege !== 990 && $ege !== 740){
     $ege = (int)readline("В каком году произошло крещение Руси?
Варианты: 810, 990 или 740 год:");


 }
if ($ege === 990 ){
    echo"правильно,молодцы";

}
else if ($ege === 810 || 740) {
    echo "неверно";
}













