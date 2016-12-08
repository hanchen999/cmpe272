<?php
   $username = $_GET['username'];
   $password = $_GET['password'];
   if ($username == 'admin' && $password == '1234567') {
       echo "<h1>Current User</h1>";
       foreach(file('user.txt') as $line) {
           echo "<div>{$line}</div>"; 
       }
   }
   else {
      echo '<div>Your username/password is wrong!</div>';
   } 
?>
