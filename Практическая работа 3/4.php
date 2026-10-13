<h1>Оператор выбора</h1>
<h2>Задача 1</h2>
<?php
$n  = 9;
switch ($n) {
    case 0:
        echo "zero";
        break;
        case 1:
            echo "one";
            break;
            case 2:
                echo "two";
                break;
                case 3:
                    echo "three";
                    break;
                    case 4:
                        echo "four";
                        break;
                        case 5:
                            echo "five";
                            break;
                            case 6:
                                echo "six";
                                break;
                                case 7:
                                    echo "seven";
                                    break;
                                    case 8:
                                        echo "eight";
                                        break;
                                        case 9:
                                            echo "nine";
                                            break;
                                            case 10:
                                                echo "ten";
                                                break;
           
}
?>
<h2>Второе задание</h2>
<?php
$n = 1;
switch($n){
    case 1:
        echo "1 января Новый год ,";
        echo "7 января Рождество";
        break;
        case 2:
            echo "23 февраля день защитника Отечетсва";
            break;
            case 3:
                echo "8 марта Менждународный женский день";
                break;
                case 5:
                    echo "1 мая День весны и труда,";
                    echo "9 День Победы";
                    break;
                    case 6:
                        echo "12 июня День России";
                        break;
                        case 11:
                            echo "4 ноября День народного единства";
                            break;
                            default:
                            echo "Праздничных дней нет";


}
?>
<h2>Третье задание</h2>
<?php
$number = 12;
$lastDigit = $number % 10;
$square = $number ** 2;
$lastDigitOFSquare = $square % 10;
switch ($lastDigit){
    case 0:
        echo "Последняя цифра квадрата : 0 ";
        break;
        case 1: case 9:
            echo "Последняя цифра квадрата : 1";
            break;
            case 2: case 8:
                echo "Последняя цифра квадрата : 4";
                break;
                case 3: case 7:
                    echo "Последняя цифра квадрата : 9";
                    break;
                    case 4: case 6:
                        echo "Последняя цифра квадрата : 6";
                        break;
                        case 5:
                            echo "Последняя цифра квадрата :5";
                            break;
                            default:
                            echo "Ошибка";

}
?>
<h2>Четвертая задача</h2>
echo "<h2>Задание 4<h2>";
?>
<form method="post">
    Введите число от 1 до 99: <input type="number" name="age" min="1" max="99" required>
    <input type = "submit" value="Отправить">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" &&  isset($_POST['age'])){
    $age = (int)$_POST['age'];

    $lastDigit = $age % 10;
    $lastTwoDigits = $age % 100;

    if ($lastTwoDigits  >= 11 && $lastTwoDigits <= 14) {
        $suffix = "лет";
    }
    elseif ($lastDigit == 1) {
        $suffix = " год";
    }
    elseif ($lastDigit >= 2 && $lastDigit <= 4) {
        $suffix = "год";
    }
else {
        $suffix = "лет";
    }
    echo "Мне $age $suffix";
}
?>
