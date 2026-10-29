<h1>Иногомерные массивы</h1>
<h2>Объявление</h2>
<?php
$students = [['Иванов', 'Иван'], ['Петров', 'Петр'], ['Сидоров', 'Вова']];
?>
<h2>Вывод на экран</h2>
<?php
foreach($students as $student) {
    foreach($student as $name) {
        echo $name, ' ';

    }
    echo '<br>';
}
?>
<h2>Ассоциативные массивы</h2>
<?php
$students = [['second name' => 'Иванов', 'first name' =>'Иван'],['second name' => 'Петров', 'first name' =>'Петр'],['second name' => 'Сидоров', 'first name' =>'Вова']];
?>
<h2>Вывод асс массива</h2>
<?php
foreach($students as $student) {
    echo '<p>' . $student['second name'], ' ' . $student['first name'] . '</p>';
}
?>
<h2>Обращение к переменным</h2>
<?php
echo $students[0] ['first name'];
?>
<h2>Еще пример асс массива</h2>
<?php
$college = ['iv1k-25' =>[['second name' => 'Иванов', 'first name' =>'Иван'],['second name' => 'Петров', 'first name' =>'Петр']], '1v1-25' => [['second name' => 'Сидоров', 'first name' =>'Вова']]];
foreach($college as $key => $group) {
    echo "<h3>Группа: $key</h2>";
    foreach ($group as $student) {
        echo '<p>' . $student['second name']. ' ' . $student['first name'] . '</p>';
    }
}
?>
