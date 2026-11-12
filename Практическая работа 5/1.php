<h1>Строки</h1>
<h2>Задание 1</h2>
<?php
$str = "Hello (world) of PHP";
$len = strlen($str);
$start = 0;
$end = 0;
for ($i = 0; $i < $len; $i++){
    if ($str[$i] == '(') $start = $i;
    if ($str[$i] == ')') $end = $i;

}
for ($i = $start + 1; $i < $end; $i++) {
    echo $str[$i];
}
?>
<h2>Задание 2</h2>
<?php
$str ="Fikus pikus karandash.";
$len = strlen($str);
$words = 1;
for ($i = 0; $i < $len; $i++)
    if ($str[$i] == ' ') {
        $words++;
    }
    echo "Количество слов в строке = $words";
?>
<h2>Задание 3</h2>
<?php
$str = "azbuka prodaetsa na saite pararap gipoag";
$len = strlen($str);
$word = "";
for($i = 0; $i <= $len; $i++) {
    if ($i == $len || $str[$i] == ' ') {
        if (strlen($word) > 0) {
            $first = $word[0];
            $last = $word[strlen($word) - 1];
            if ($first == $last) {
                echo $word . "<br>";
            }
        }
        $word = "";

    } else {
        $word = $word . $str[$i];
    }
}

?>
<h2>Задание 4</h2>
<?php
$str = "Hello world!";
$len = strlen($str);
$count = 0;

for($i = 0; $i < $len; $i++)
    
?>
