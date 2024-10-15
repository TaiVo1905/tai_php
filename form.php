<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            background-color: #999;
            border: 3px solid red;
            display: flex;
            text-align: left;
            justify-content: center;
            flex-direction: column;
            width: 500px;
        }

        .title {
            color: blue;
            align-self: center;
        }

        .class1, .class2, .class3, .class4 {
            margin: 5px 20px;
            display: flex;
            
        }

        span {
            display: block;
            line-height: 30px;
        }

        #semester1, #semester2, #year {
            height: 30px;
            outline: none;
            margin-left: 5px;
        }

        #semester1, #semester2 {
            display: block;
            flex-grow: 1;
            padding-left: 5px;
        }

        #year {
            width: 10%;
            color: red;
        }

        .class3 > select {
            margin-left: 46px !important;
        }

        #summarise{
            display: block;
            width: 200px;
            height: 30px;
            background-color: #fff;
            flex-grow: 1;
            line-height: 30px;
            padding-left: 5px;
            
        }

        #type {
            margin: 2px 20px;
            font-weight: 500;
            font-size: 48px;
            /* display: none; */
        }

        .class5 {
            display: flex;
            text-align: center;
            justify-content: space-around;
            padding-top: 20px;
        }

        .class5 > input {
            width: 54px;
            height: 32px;
            cursor: pointer;
            color: black;
        }


    </style>
</head>
<body>
    <?php 
    error_reporting(0);
    $s1 = $_POST['semester1'];
    $s2 = $_POST['semester2'];
    $y = $_POST['year'];
        function calculation ($s1, $s2, $y) {
            switch ($y) {
                case '1':
                    $k = ($s1 + $s2)/2;
                    break;
                case '2':
                    $k = ($s1 + $s2*2)/3;
                    break;
                case '3':
                    $k = ($s1 + $s2*3)/4;
                    break;
                default:
                    $k = 0;
            }
            
            if ($k >= 9) {
                $type = "Hoc sinh gioi";
            } elseif ($k >= 7) {
                $type = "Hoc sinh kha";
            } elseif ($k >= 5) {
                $type = "Hoc sinh trung binh";
            } else {
                $type = "Hoc sinh yeu";
            }
            return array($k, $type);
        }
        $k = calculation($s1, $s2, $y)[0];
        $type = calculation($s1, $s2, $y)[1];
    ?>
    <div class="container">
        <h1 class="title">BANG DIEM CUA EM</h1>
        <form action="form.php" method = "POST">
            <div class="class1">
                <span>Semester 1:</span>
                <input type="number" name="semester1" class="semester" id="semester1" value = "<?php echo $s1 ?>">
            </div>
    
            <div class="class2">
                <span>Semester 2:</span>
                <input type="number" name="semester2" class="semester" id="semester2" value = "<?php echo $s2 ?>">
            </div>
    
            <div class="class3">
                <span>Year:</span>
                <select name="year" id="year">
                    <option value="1" <?php echo $y == "1"? 'selected':''; ?>>1</option>
                    <option value="2" <?php echo $y == "2"? 'selected':''; ?>>2</option>
                    <option value="3" <?php echo $y == "3"? 'selected':''; ?>>3</option>
                </select>
            </div>
            
            <div class="class4">
                <span>Summarise:</span>
                <div id="summarise"><?php echo $k ?></div>
            </div>
    
            <div id="type"><?php echo $type ?></div>
    
            <div class="class5">
                <input type="submit" name="submit" id="submit" >
                <input type="reset" name="" id="" onclick = "window.location.href ='http://localhost/tai_php/form.php'" >
            </div>
        </form>
        <!-- <script>
            document.querySelector('form').addEventListener('submit', () => {
                document.querySelector('#type').style.display = "block !important";
            })
        </script> -->
    </div>
    
</body>
</html>