<?php
$cookie = unserialize($_COOKIE['most']);
  echo "<h1>Most Visited Top Five Products</h1>";
  $count = 0;
  if (is_array($cookie)) {
     arsort($cookie);
     foreach ($cookie as $key => $value) {
          if ($count == 5) {
             break;
          }
          echo "<div> {$key}  :  {$value}</div>";
          ++$count;
      }
   }
   else {
      echo "No products Found!";
   }
?>
