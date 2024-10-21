<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #search {
            width: 100px;
        }

        #search_button {
            background-color: red;
            cursor: pointer;
            color: white;
        }
    </style>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="search" name="search" id="search">
        <button id="search_button">Search</button>
    </form>

    <?php
    error_reporting(0);
        function search($value, $arr) {
            return array_search($value, $arr);
        }

        $arr = [
            "ram",
            "aakash",
            "saran",
            "mohan",
            "sarans"
        ];
        $value = $_POST['search'];
        echo search($value, $arr)
    ?>
</body>
</html>