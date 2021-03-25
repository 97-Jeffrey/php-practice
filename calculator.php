<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PRACTICE</title>
</head>
<body>

  <form action="calculator.php" method="get">
    First Number: <input type="number" name="firstNumber">
   </br></br>
    Second Number: <input type="number" name="secondNumber">
    </br></br>
    <input type='submit'>
  </form>
  <br>

  The sum of two numbers are <?php echo $_GET["firstNumber"] + $_GET["secondNumber"] ?>

</body>
</html>