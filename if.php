<!DOCTYPE html>
<html lang="en">
<head>
  <title>If statement</title>
</head>
<body>
  <?php
    $isMale = false;
    $isFemale = false;
    if($isMale || !$isFemale){
      echo "I am a male";
    }
    else if($isFemale){
      echo "I am female";
    }
    else{
      echo "You are human";
    }

    function getMax($num1, $num2){
      return $num1 >$num2? $num1:$num2;
    }

    echo getMax(234,456);
  ?>
</body>
</html>