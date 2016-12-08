<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<?php
  echo "<h1>Welcome to DongBeiCaiGuan HomePage</h1>";
  echo "<h2>Chinese Food</h2>";
  echo "<div>
          <ul>
               <li><a href='index.php'><span>Home</span></a></li>
               <li><a href='about.php'><span>About</span></a></li>
	       <li><a href='products.php'><span>Products</span></a></li>
	       <li><a href='news.php'><span>News</span></a></li>
	       <li><a href='Contacts.php'><span>Contacts</span></a></li> 
          </ul>
        </div>";
?>
<div>

<div>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto; margin-right: 60px;">Secure Section</button>

<div id="id02" class="modal">

  <form class="modal-content animate" action="secure.php" method="GET">

    <div class="container">
      <label><b>Secure Section</b></label>
      <input type="text" placeholder="Enter username" name="username" required>
      <input type="password" placeholder="Enter password" name="password" required>
      <button type="submit">Submit</button>
    </div>
  </form>
</div>

</div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-right: 60px;">Search User</button>
</div>

<div id="id01" class="modal">

  <form class="modal-content animate" action="search.php" method="GET">

    <div class="container">
      <label><b>Key Pattern</b></label>
      <input type="text" placeholder="Enter username/email/cellphone" name="search" required>

      <button type="submit">Search</button>
    </div>
  </form>
</div>
<div>
<form action="curl_test.php">
    <input type="submit" value="User lists in different companies" />
</form>

</div>
</body>
</html>
