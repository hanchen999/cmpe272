<?php
$cookie = unserialize($_COOKIE['latest']);
  echo "<h1>Latest Five Products</h1>";
  $count = 1;
  if (is_array($cookie)) {
     foreach ($cookie as $x) {
          echo "<div> {$count}  :  {$x}</div>";
          ++$count;
      }
   }
   else {
      echo "No products Found!";
   }
?>
