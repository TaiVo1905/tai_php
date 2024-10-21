<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tai learns programming</title>
</head>
<body>
    <?php
        $course = ['FONTEND' => 
                                ['tilte' => 'Khoa hoc lap trinh fontend online',
                                'fee' => 1200000],
                    'PHP-MYSQL' => 
                                ['tilte' => 'Khoa hoc lap trinh web PHP-MYSQL',
                                'fee' => 168000],];
        foreach($course as $k => $v) {
            echo "$k <br>";
            echo $v['tilte'] . "<br>";
            echo $v['fee'] . "<br>";
        };
    ?>
</body>
</html>