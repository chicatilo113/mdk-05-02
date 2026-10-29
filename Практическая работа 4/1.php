<h1>Практическая работа №4 - массивы</h1>
<h2>Задание 1</h2>
<?php
$nums = [2, 44, 4, 7, 12];
$max = $nums [0];
$min = $nums [1];
foreach ($nums as $num) {
    if($num > $max){
        $max = $num;

    }
}
foreach ($nums as $num) {
    if($num < $min){
        $min = $num;

    }
}
echo "Минимальное число = $min, Максимальное число = $max";
?>
<h2>Задание 2</h2>
<?php
$sum = 0;
$proizvedenie = 1;
foreach ($nums as $value) {
    $sum += $value;
    $proizvedenie *= $value;
}
echo "Произведение = $proizvedenie,а сумма = $sum";
?>
<h2>Задание 3</h2>
<?php
$sum = 0;
$count = 0;
foreach ($nums as $value) {
    $sum += $value;
    $count++;
}
$srednee = $sum / $count;
echo"Среднее арифмитическое = $srednee";
?>
<h2>Задание 4</h2>
<?php
$nums [2, 44, 4, 7, 12];
$mass [];
foreach ($nums as $value) {
    if ($value >=0) {
        $mass [] = $value ** 2;
    } elseif ($value < 0){
        $mass [] = $value * -1;
    }else {
        $mass [] = 0;
    }
}
echo "Исходный массив = $num"; 