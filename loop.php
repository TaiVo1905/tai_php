<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="src/css/main.css" />
    <style>
        body{
          display: flex ;
        }
        .square{
            width: 20px;
            height: 20px;
            background-color: red;
            margin: 10px;
        }
    </style>
  </head>
  <body>
    <?php 
        for($i= 0; $i <=5;$i++){
          echo"<div class='row'>";
          for($j= 0; $j <=5;$j++){
            echo"<div class='square'></div>";
            echo" ";
          } 
          echo"</div>";
        }
        echo"<br>";
        $sum1 = 0;
        $sum2 = 0;
        $sum3 = 0;
        for($i= 0; $i <=5;$i++){
          $sum1 += $i;
          if($i % 2 == 0 ){
            $sum2 += $i;
          }else{
            $sum3 += $i;
          }
        }
        echo"$sum1, $sum2, $sum3";
        echo "<br>";
        $vari = 0;
        while($vari <= 5){
          echo"$vari";
          $vari = $vari + 1;
        }
    ?>
  </body>
</html>