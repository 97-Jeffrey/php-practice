<!DOCTYPE html>
<html lang="en">
<head>
  <title>Function</title>
</head>
<body>
  <?php
    function sayHi($name, $age){
      echo "Hello $name, you are $age";
    }
    sayHi("Jeffrey", 18);

    function cubicNumber($number){
      return pow($number, 3);
    }

    $num = cubicNumber(5);
    echo $num;
  ?>
</body>
</html>