<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

} else {
    header("Location: /index.php");
}
if (intval($_POST['number1']) && intval($_POST['number2'])){
    $n1 = $_POST['number1'];
    $n1 = intval($n1);
    $n2 = $_POST['number2'];
    $n2 = intval($n2);
}else{
    echo "Введите корректные значения";
}

function plus()
{
    echo $_POST['number1'] + $_POST['number2'] . "<br>";
    echo "<a href='index.php'>На главную</a>";
}

function minus()
{
    echo $_POST['number1'] - $_POST['number2'] . "<br>";
    echo "<a href='index.php'>На главную</a>";
}

function umnojenie()
{
    echo $_POST['number1'] * $_POST['number2'] . "<br>";
    echo "<a href='index.php'>На главную</a>";
}

function delenie()
{
    echo $_POST['number1'] / $_POST['number2'] . "<br>";
    echo "<a href='index.php'>На главную</a>";
}

$a = $_POST['variable'];
switch ($a){
    case 'plus':
        plus();
        break;
    case 'minus':
        minus();
        break;
    case 'umnojenie':
        umnojenie();
        break;
    case 'delenie':
        delenie();
        break;
}