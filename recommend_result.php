<!DOCTYPE html>
<html>
   <head>
      <!-- Standard Meta -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <!-- Site Properties -->
      <title>Product Order Detail</title>
      <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
      <link rel="stylesheet" type="text/css" href="dist/components/site.css">
      <link rel="stylesheet" type="text/css" href="dist/components/card.css">
      <link rel="stylesheet" type="text/css" href="dist/components/container.css">
      <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
      <link rel="stylesheet" type="text/css" href="dist/components/header.css">
      <link rel="stylesheet" type="text/css" href="dist/components/image.css">
      <link rel="stylesheet" type="text/css" href="dist/components/menu.css">
      <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
      <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
      <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
      <link rel="stylesheet" type="text/css" href="dist/components/button.css">
      <link rel="stylesheet" type="text/css" href="dist/components/list.css">
      <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
      <link rel="stylesheet" type="text/css" href="dist/components/sidebar.css">
      <link rel="stylesheet" type="text/css" href="dist/components/transition.css">
      <link rel="stylesheet" type="text/css" href="dist/components/rating.css">
      <link rel="stylesheet" type="text/css" href="index.css">
      <style type="text/css">
         .hidden.menu {
         display: none;
         }
         .masthead.segment {
         min-height: 700px;
         padding: 1em 0em;
         }
         .masthead .logo.item img {
         margin-right: 1em;
         }
         .masthead .ui.menu .ui.button {
         margin-left: 0.5em;
         }
         .masthead h1.ui.header {
         margin-top: 3em;
         margin-bottom: 0em;
         font-size: 4em;
         font-weight: normal;
         }
         .masthead h2 {
         font-size: 1.7em;
         font-weight: normal;
         }
         .ui.vertical.stripe {
         padding: 8em 0em;
         }
         .ui.vertical.stripe h3 {
         font-size: 2em;
         }
         .ui.vertical.stripe .button + h3,
         .ui.vertical.stripe p + h3 {
         margin-top: 3em;
         }
         .ui.vertical.stripe .floated.image {
         clear: both;
         }
         .ui.vertical.stripe p {
         font-size: 1.33em;
         }
         .ui.vertical.stripe .horizontal.divider {
         margin: 3em 0em;
         }
         .overlay .menu {
         position: relative;
         left: 0;
         transition: left 0.5s ease;
         }
         .overlay.fixed .menu {
         left: 800px;
         }
         .text.container .left.floated.image {
         margin: 2em 2em 2em -4em;
         }
         .text.container .right.floated.image {
         margin: 2em -4em 2em 2em;
         }
         .quote.stripe.segment {
         padding: 0em;
         }
         .quote.stripe.segment .grid .column {
         padding-top: 5em;
         padding-bottom: 5em;
         }
         .footer.segment {
         padding: 5em 0em;
         }
         .secondary.pointing.menu .toc.item {
         display: none;
         }
         @media only screen and (max-width: 700px) {
         .ui.fixed.menu {
         display: none !important;
         }
         .secondary.pointing.menu .item,
         .secondary.pointing.menu .menu {
         display: none;
         }
         .secondary.pointing.menu .toc.item {
         display: block;
         }
         .masthead.segment {
         min-height: 350px;
         }
         .masthead h1.ui.header {
         font-size: 2em;
         margin-top: 1.5em;
         }
         .masthead h2 {
         margin-top: 0.5em;
         font-size: 1.5em;
         }
         }
      </style>
      <script src="jquery.min.js"></script>
      <script src="semantic.min.js"></script>
      <script src="dist/components/transition.js"></script>
      <script src="dist/components/dropdown.js"></script>
      <script src="dist/components/visibility.js"></script>
            <script src="dist/components/rating.js"></script>
      <script src="dist/components/rating.min.js"></script>
      <script>
         $(document)
           .ready(function() {
         
             // fix menu when passed
             $('.ui.rating')
              .rating({
                maxRating: 5
              })
            ;
            $('.toggle.example .rating')
              .rating({
                initialRating: 2,
                maxRating: 4
              })
            ;
             $('.masthead')
               .visibility({
                 once: false,
                 onBottomPassed: function() {
                   $('.fixed.menu').transition('fade in');
                 },
                 onBottomPassedReverse: function() {
                   $('.fixed.menu').transition('fade out');
                 }
               })
             ;
                  // lazy load images
            $('.image').visibility({
              type: 'image',
              transition: 'vertical flip in',
              duration: 500
            });
         // show dropdown on hover
                    $('.ui.menu  .ui.dropdown').dropdown({
                      on: 'hover'
                    });
             // create sidebar and attach to menu open
             $('.ui.sidebar')
               .sidebar('attach events', '.toc.item')
             ;
         
           })
         ;
      </script>
      </head>
   <body>
   <div class="ui doubling stackable grid container">           
               <div class="one wide column">
               </div>
               <div class="fifteen wide column">
                     <?php
                     require_once('DB_individual.php');
                     $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    $result_rate = mysqli_query($conn, "SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.visited as visited, AVG(b.rate) as rate, a.name as name, a.description as description FROM market_product a LEFT JOIN market_rate b ON a.product_id = b.product_id WHERE b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.visited, a.price, a.name, a.description order by rate DESC limit 5");

    $result_price = mysqli_query($conn, "SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.visited as visited, AVG(b.rate) as rate, a.name as name, a.description as description FROM market_product a LEFT JOIN market_rate b ON a.product_id = b.product_id WHERE b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.visited, a.price, a.name, a.description order by price DESC limit 5");

    $result_visited = mysqli_query($conn, "SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.visited as visited, AVG(b.rate) as rate, a.name as name, a.description as description FROM market_product a LEFT JOIN market_rate b ON a.product_id = b.product_id WHERE b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.visited, a.price, a.name, a.description order by visited DESC limit 5");
    ?>
    <h1>Top Five Rated Product</h1>
                  <div class="ui five doubling cards">
    <?php
                    
                    while ($row = mysqli_fetch_assoc($result_rate)) {
                       $price = $row['price'];
                       $description = $row['description'];
                       $rate = intval($row['rate']);
                       $picture = $row['picture'];
                       $picture = substr($picture,1);  
                  ?>
                  <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?php echo $picture; ?>">
                     </div>
                     <div class="content">
                        <div class="header">$<?php echo $price; ?></div>
                        <div class="description">
                           <a href="<?php echo $picture; ?>"><?php echo $description; ?></a>
                        </div>
                     </div>
                     <div class="ui two bottom attached buttons">
                       <div class="ui teal basic button">
                            <div class="ui mini star rating" data-rating=<?php echo $rate; ?>></div>
                        </div>
                     </div>
                  </div>

                  <?php  } ?>

                  </div>
                  <h1>Top Five Price Product</h1>
                  <div class="ui five doubling cards">
    <?php
                    
                    while ($row = mysqli_fetch_assoc($result_price)) {
                       $price = $row['price'];
                       $description = $row['description'];
                       $rate = intval($row['rate']);
                       $picture = $row['picture'];
                       $picture = substr($picture,1);  
                  ?>
                  <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?php echo $picture; ?>">
                     </div>
                     <div class="content">
                        <div class="header">$<?php echo $price; ?></div>
                        <div class="description">
                           <a href="<?php echo $picture; ?>"><?php echo $description; ?></a>
                        </div>
                     </div>
                     <div class="ui two bottom attached buttons">
                       <div class="ui teal basic button">
                            <div class="ui mini star rating" data-rating=<?php echo $rate; ?>></div>
                        </div>
                     </div>
                  </div>

                  <?php  } ?>

                  </div>
                  <h1>Top Five Visited Product</h1>
                  <div class="ui five doubling cards">
    <?php
                    
                    while ($row = mysqli_fetch_assoc($result_visited)) {
                       $price = $row['price'];
                       $description = $row['description'];
                       $rate = intval($row['rate']);
                       $picture = $row['picture'];
                       $picture = substr($picture,1);  
                  ?>
                  <div class="card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                     <div class="image">
                        <img src="<?php echo $picture; ?>">
                     </div>
                     <div class="content">
                        <div class="header">$<?php echo $price; ?></div>
                        <div class="description">
                           <a href="<?php echo $picture; ?>"><?php echo $description; ?></a>
                        </div>
                     </div>
                     <div class="ui two bottom attached buttons">
                       <div class="ui teal basic button">
                            <div class="ui mini star rating" data-rating=<?php echo $rate; ?>></div>
                        </div>
                     </div>
                  </div>

                  <?php  } ?>

                  </div>
               </div>
         </div>
         </body>
</html>
