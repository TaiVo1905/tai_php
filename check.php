<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* div {
            width: 100px;
            height: 100px;
            background-color:red;
            margin: 5px;
            display: inline-block;
        } */
    </style>
</head>
<body>
    <?php
    $n = $_POST['number'];
    function sum($n) {
        return $n%2===0?"Chan":"Le";
    }
    $kq = sum($n);
        ?>
    <form action="check.php" method = "POST">
        <div>
        <label for="number">Number</label>
        <input type="number" name="number" id="number" value = "<?php echo $n ?>">
        </div>
         <input type="submit" name="" id="">
    </form>
    <div>Result: <span><?php echo $kq ?></span></div>
</body>
</html>