<h1>Практическая работа 3 циклы<h1>
<?php
echo "<h2>Задание1<h2>";
$a = 4;
$b = 6;
$c = 8;
$d = $a;
for ($i = 0; $i < $c; $i++) {
    echo $d . " ";
    $d *= $b; 
}
?>

<?php
echo "<h2>Задание2<h2>";
$lastNumber = 10;
$sum = 0;

for ($i = 1; $i <= $lastNumber; $i++){
    $sum = $sum + $i;
}
echo "Сумма чисел от 1 до $lastNumber равна :$sum";
?>
<?php
echo "<h2>Задание3<h2>";
$lastNumber = 10;
$multiplicationResult  = 1;
for ($i = 2; $i <= $lastNumber; $i += 2) {
    $multiplicationResult = $multiplicationResult * $i;
}
echo "Произведение четных чисел от 1 до {$lastNumber} = {$multiplicationResult}";
?>
<?php
echo "<h2>Задание4<h2>";
$a = 5;
$b = 10;
$c = 0;
for ($i = 1; $i <= $a;  $i++) {
    $c += $b;
    $b = $b *1.1;
}
echo "Суммарный путь за $a дней: " . round($c, 2). "км";
?>
<?php


