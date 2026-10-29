<h1>Многомерные массивы</h1>
<h2>Задание 1</h2>
<?php
$table = [[10, 20 , 30, 40] ,  [50, 60, 70, 80] , [90, 100, 110, 120]];
 
echo "<table border='1' style='border-collapse: collapse;'>";
foreach ($table as $row){
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style= 'padding: 5px;'>$value</td>";

    }
    echo"</tr>";
}
echo "</table>";
?>
<h2>Задание 2</h2>
<?php
$squares = [];
for ($i = 1; $i <=9; $i++) {
    $row = [];
    for ($j = 0; $j <= 9; $j++) {
        $number = $i * 10 + $j;
        $row[] = $number * $number;

    }
    $squares[] = $row;
}
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
foreach ($squares as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style='padding: 5px;>$value</td>";

    }
    echo "</tr>";

}
echo "</table>";
?>
<h2>Задание 3</h2>
<?php
$matrix = [];
for ($i = 0; $i <5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matrix[$i][$j] = rand(1, 100);
    }
}
$max = $matrix[0][0];
$min = $matrix[0][0];
$maxRow = 0; $maxCol = 0;
$minRow = 0; $minCol = 0;
for ($i = 0; $i <5; $i++){
    for ($j = 0; $j < 4; $j++){
        if ($matrix[$i][$j] > $max) {
            $max = $matrix[$i][$j];
            $maxRow = $i;
            $maxCol = $j;
        }
        if ($matrix[$i][$j] > $min) {
            $max = $matrix[$i][$j];
            $minRow = $i;
            $minCol = $j;
        }
    }
}
echo "<p>Максимальный элемент: <b>$max</b> (Строка: $maxRow, Столбец: $maxCol)</p>";
echo "<p>Минимальный элемент: <b>$min</b> (Строка: $minRow, Столбец: $minCol)</p>";