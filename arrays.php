<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tai learns programming</title>
    <style>
        p {
            font-size: 30px;

        }
    </style>
</head>
<body>
    <?php
        $first_array = ["red", "green", "blue"];
        foreach($first_array as $item) {
            echo "<p style='color: $item'>$item</p>";
        }
    ?>
</body>
</html>