<!DOCTYPE html>
<html lang="en">
<head>
  <title>CheckBox</title>
</head>
<body>
 <form action="checkBox.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"></br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"></br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"></br>
  <input type="submit">
 </form>

  <?php
    // we are receiving an array of fruits:
    $fruits = $_POST["fruits"];
    echo $fruits;
  ?>
</body>
</html>