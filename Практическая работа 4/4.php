<h1>Функции</h1>
<h2>1 Задание</h2>
<?php
function fdlin($radius){
    return 2 * 3.14 * $radius;


}
$r=10;
$length = fdlin($r);
echo "<p> Радиус $r. Длина окружности: " . round($length, 2) . "</p>";
?>
<h2>Задание 2</h2>
<form method="POST">
    Сторона А: <input type="number"
    step="any" name="a" required><br><br>
    Сторона B: <input type="number"
    step="any" name="b" required><br><br>
    Сторона C: <input type="number"
    step="any" name="c" required><br><br>
      <button type="sumbit">Вычислить</button>
</form>
<?php
function treyg($a, $b, $c){
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a){
        $p = ($a + $b + $c) / 2;
        return sqrt($p * ($p - $a) * ($p - $b ) * ($p - $c));

    } else {
        return 0;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
    $s = treyg($a, $b, $c);
    if ($s == 0){
        echo "<p>Треугольник с такими сторонами не существует (Результат: 0).</p>";
    } else {
        echo "<p>Площадь треугольника:" . round ($s, 2) . "</p>";

    }
}
?>
