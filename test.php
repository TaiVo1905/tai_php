<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 100px;
            height: 100px;
            background-color:red;
            margin: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
    $n1 = $_POST['number1'];
    $n2 = $_POST['number2'];
    function sum($n1, $n2) {
        return $n1 + $n2;
    }
    $kq = sum($n1, $n2);
        ?>
    <form action="test.php" method = "POST">
        <div>
        <label for="number1">Number 1</label>
        <input type="number" name="number1" id="number1" value = "<?php echo $n1 ?>">
        </div>
        <div>
            <label for="number2">Number 2</label>
            <input type="number" name="number2" id="number2" value = "<?php echo $n2 ?>">
         </div>
         <input type="submit" name="" id="">
    </form>
    <div>Result: <span><?php echo $kq ?></span></div>
</body>
</html>