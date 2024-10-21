<?php
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $price = $_POST["price"];
            if (!isset($_SESSION["products"])) {
                $_SESSION["products"] = [];
            }
        }
        array_push($_SESSION["products"], ["name" => $name, "price" => "$price VND"]);
        header("Location: pushArr.php");
        exit;
    ?>