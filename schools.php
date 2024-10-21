<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);
    $schools = array(
        "students" => array(
                            array("MaSV" => "SV01",
                            "Ten" => "Phan Van Cuong",
                            "Ngay sinh" => "10/11/1988",
                            "Gioi tinh" => "nam"),
                            array("MaSV" => "SV01",
                            "Ten" => "Phan Van Cuong",
                            "Ngay sinh" => "10/11/1988",
                            "Gioi tinh" => "nam"),
        
        ),
        "tearcher" => array(
                            array("MaSV" => "SV01",
                                "Ten" => "Phan Van Cuong",
                                "Ngay sinh" => "10/11/1988",
                                "Gioi tinh" => "nam"),
        ),
        );

    foreach ($schools as $pos => $info) {
        echo $pos . "<br>";
        foreach ($info as $index => $value) {
            echo $index . $value['MaSV'] . "</br>" . $value['Ten'] . "</br>" . $value['Ngay sinh'] . "</br>" . $value['Gioi tinh'] . "</br>";
        }
    }
    ?>
</body>
</html>