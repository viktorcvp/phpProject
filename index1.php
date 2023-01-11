<?php
const QUISTION1 = "какая задача стоит перед вами сегодня? ";
$timeQuestion = "Сколько примерно времени это займет? ";


$name = readline("Привет, как вас зовут? :");
$ege = (int)readline("сколько вам лет? :");

echo "Вас зовут $name, вам $ege лет\n";

$task = readline(QUISTION1);
$time = (int)readline($timeQuestion);
$task1 = readline(QUISTION1);
$time1 = (int)readline($timeQuestion);
$task2 = readline(QUISTION1);
$time2 = (int)readline($timeQuestion);
$sum = $time + $time1 + $time2;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
$task $time(ч)
$task1 $time1(ч)
$task2 $time2(ч)\n";

echo "Примерное время выполнения плана = {$sum}ч";
