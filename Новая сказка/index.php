<?php
error_reporting(-1);
ini_set('displays_errors',1);
header('Content-type: text/html');
//include('html\header.html');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html>
<head>
<link rel="stylesheet" href="css/styles.css">
<meta charset="ut8-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Сказка</title>
</head>


<body>
<form method="post" action="constructor.php">
    <table border="2">
        <tr>
            <td colspan="2">Сказка</td>
        </tr>
        <tr>
            <td>Герой</td>
            <td>
                <select name="hero">
                    <option value="Белоснежка">Белоснежка</option>
                    <option value="Золушка">Золушка</option>
                    <option value="Ариэль">Ариэль</option>
                    <option value="Жасмин">Жасмин</option>
                    <option value="Рапунцель">Рапунцель</option>
                    <option value="Эсмеральда">Эсмеральда</option>
                    <option value="Эсмеральда">Красная Шапочка</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Злодей</td>
            <td>
                <select name="antihero">
                    <option value="Волк">Волк</option>
                    <option value="Кощей">Кощей</option>
                    <option value="Змей Горыныч">Змей Горыныч</option>
                    <option value="Соловей Разбойник">Соловей Разбойник</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Где</td>
            <td>
                <select name="where">
                    <option value="у самого синего моря">У самого синего моря</option>
                    <option value="в тридевятом царстве">В тридевятом царстве</option>
                    <option value="в одной деревне">В одной деревне</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Когда</td>
            <td>
                <select name="when">
                    <option value="давным - давно">Давным - давно</option>
                    <option value="при царе Горохе">При царе Горохе</option>
                    <option value="совсем недавно">Совсем недавно</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Второстепенные персонажи</td>
            <td>
                <select name="secondhero">
                    <option value="Аннушка">Аннушка</option>
                    <option value="Бабушка">Бабушка</option>
                    <option value="Крёстная">Крёстная</option>
                </select>
            </td>
        </tr>

    </table>
    <input type="submit"
    value="Сочинить">
</form>
</body>
</html>