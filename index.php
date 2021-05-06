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
<h1>CALCULATOR</h1>

<form action="" method="post">
    <fieldset>
        <legend>Calculator</legend>
        <p>Toán hạng 1</p>
        <input type="number" name="input1">
        <br> <br>
        <div>Toán tử</div>
        <select name="select" id="selection">
            <option value="+">Cộng</option>
            <option value="-">Trừ</option>
            <option value="x">Nhân</option>
            <option value="/">Chia</option>
        </select>
        <br>
        <p>Toán hạng 2</p>
        <input type="number" name="input2">
        <br>
        <input type="submit">
    </fieldset>
</form>
<h1>RESULT</h1>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $x = $_POST['input1'];
    $y = $_POST['input2'];
    $operator = $_POST['select'];
    include_once 'calculate.php';
    calculate($x,$y,$operator);
}
?>
</body>
</html>