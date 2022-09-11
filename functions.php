<?php
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