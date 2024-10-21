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
    <form action="test.php" method="POST">
        <input type="text" name="name" id="name">
        <input type="number" name="price" id="price">
        <button id="add_item">ADD</button>
    </form>
    <div>
        <h1>Product List</h1>
        <ul>
            <?php
            session_start();
                if(isset($_SESSION["products"])) {
                    foreach ($_SESSION["products"] as $k => $v) {
                        echo "<li>" . $v["name"] . " - " . $v["price"] . "</li>";
                    }
                } else {
                    echo "NO PRODUCT";
                }
            exit;
            ?>
        </ul>
    </div>
    
</body>
</html>