<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="doPage.php" method="POST">
    <input type="text" name="number1"><br>
    <input type="text" name="number2"><br>
    <select name="variable">
        <option value="plus">Сложение</option>
        <option value="minus">Вычитание</option>
        <option value="umnojenie">Умножение</option>
        <option value="delenie">Деление</option>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>