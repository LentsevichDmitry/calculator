<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location:/index.php");
}

$availableActions = ['plus', 'minus', 'multiply', 'divide'];
$n1 = intval($_POST['number1']);
$n2 = intval($_POST['number2']);
$action = $_POST['action'];

if(!$n1 || !$n2 || !in_array($action, $availableActions)) {
    die('Введите корректные значения');
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

function multiply()
{
    echo $_POST['number1'] * $_POST['number2'] . "<br>";
    echo "<a href='index.php'>На главную</a>";
}

function divide()
{
    echo $_POST['number1'] / $_POST['number2'] . "<br>";
    echo "<a href='index.php'>На главную</a>";
}

switch ($action){
    case 'plus':
        plus();
        break;
    case 'minus':
        minus();
        break;
    case 'multiply':
        multiply();
        break;
    case 'divide':
        divide();
        break;
}