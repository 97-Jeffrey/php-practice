
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Matlib Game</title>
</head>
<body>
  <h1>Matlib Game</h1>
  <form action="matlib.php" method="get">
    Rose Color:<input type='text' name="color">
    </br></br>
    Flower Name: <input type="text" name="flowerName">
    </br></br>
    Person Name: <input type="text" name="personName">
    </br></br>
    <input type="submit">

  </form>
  </br>
  <?php
   $color = $_GET["color"];
   $flowerName = $_GET["flowerName"];
   $personName = $_GET["personName"];

   echo "Rose are $color</br>";
   echo "$flowerName are blue</br>";
   echo "I love $personName";
  ?>
</body>
</html>