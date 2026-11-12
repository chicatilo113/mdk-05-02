<?php
function sayHello($name)
{
    echo "<p>Привет, $name!</p>";
}
sayHello('Вася');
sayHello('Петя');
sayHello('Коля');
?>
<h2>Функции с несколькими параметрами</h2>
<?php
function fullName($fName, $lName){
    echo "$fName $lName";
}
fullName('Вася', 'Иванов');
?>
<h2>Функции с параметрами по умолчанию</h2>
<?php
function showUserInfo($fName, $lName, $role = 'user')
{
    echo "<p>$fName $lName, роль - $role</p>";
}
showUserInfo('Коля', 'Петров', 'student');
showUserInfo('Ваня', 'Петров');
?>
<h2>Возвращаемое значение</h2>
<?php
function getUserInfo($fName, $lName, $role = 'user')
{
    return "$fName, $lName, роль - $role";
}
$info = getUserInfo('Иван', 'Иванов');
echo "<p>$info</p>";
echo getUserInfo('Иван', 'Иванов');
echo '<br>';

function squareRect($l, $w)
{
    return $l * $w;
}
$s = squareRect(20,40);
echo 'Площадь - ' . $s;