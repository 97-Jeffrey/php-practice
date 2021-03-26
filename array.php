<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array</title>
</head>
<body>
  <?php
    $fruits = array("apple", "banana", "watermelon", true, 123, false);

    $fruits[6] = "haha";
    // echo $fruits[6];

    
    echo count($fruits);

    $grades =array("Jeffrey"=>"A+++", "Pam" =>"C--", "Oscar"=>"B++");

    echo $grades["Jeffrey"];
    echo count($grades);
  ?>
</body>
</html>