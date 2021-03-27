<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PRACTICE</title>
</head>
<body>

  <form action="calculator.php" method="post">
    First Number: <input type="number" name="firstNumber">
   </br></br>
    Operation: <input type="text" name="op">
    </br></br>
    Second Number: <input type="number" name="secondNumber">
    </br></br>
    <input type='submit'>
  </form>
  <br>

 <?php
   $num1 = $_POST["firstNumber"];
   $num2 = $_POST["secondNumber"];
   $op = $_POST["op"];

   if($op =="+"){
     echo $num1 + $num2;
   }elseif($op == "-"){
     echo $num1 - $num2;
   }elseif($op == "*"){
     echo $num1 * $num2;
   }elseif($op =="/"){
     echo $num1 / $num2;
   }else{
     echo "not valid operation";
   }
 ?>

</body>
</html>