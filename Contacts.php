<?php
  echo "<h1>Contacts</h1>";
  foreach(file('info.txt') as $line) {
    echo "<div>{$line}</div>";
  }
?>
