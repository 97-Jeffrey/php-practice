<!DOCTYPE html>
<html lang="en">
<head>
  <title>Algorithm</title>
</head>
<body>
<?php 

 function reverseString($str){
   return strrev($str);
 }

 echo reverseString("Hello world");

 function numberBiggerThanOther($arr){
   rsort($arr);
   for($i=1; $i<count($arr); $i++){
     if($arr[0] < 2*$arr[$i]){
       return false;
     }
   }
   return true;
 }


?>
  
</body>
</html>