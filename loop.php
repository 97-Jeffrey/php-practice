<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loop</title>
</head>
<body>
  <?php
    $index = 1;
    while($index <6){
       echo "<div>index is $index</div></br>";
       $index++;
    }

    $numbers = array(2,1,3,4,5,2,6,78);
 
    function countValues($arr){
      $counter = 0;
      for($i=0; $i<count($arr); $i++){
        if($arr[$i]>3){
          $counter ++;
        }
      }
      return  $counter;
    }

    echo countValues($numbers);

    $fruits = array("Apple", "Banana", "Grape");

    foreach($fruits as $value){
      echo "$value</br>";
    }

    $age = array("Jeffrey"=>18, "Stephan"=>24, "amanda"=>60);

    foreach($age as $person=>$age){
      echo "$person = $age </br>";
    }

    for($j=0; $j <=8; $j++){
      if($j ==5){
        continue;
      }
      elseif($j==7){
        break;
      }
      else{
        echo "$j";
      }
    }
  

  ?>
</body>
</html>