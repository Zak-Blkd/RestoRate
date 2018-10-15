<?php

$moy=($_POST['n']+$_POST['sa']+$_POST['s'])/3;
$moy1=($_POST['n1']+$_POST['sa1']+$_POST['s1'])/3;
$moy2=($_POST['n2']+$_POST['sa2']+$_POST['s2'])/3;

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>


     <title>Hotel app</title>
     <style media="screen">
       img{
         height: 200px;
       }
     </style>
   </head>
   <body>

     <nav class="navbar navbar-inverse bg-primary navbar-toggleable-sm">
     <h3>TP01 restaurent app</h3>
     </nav><!-- nav -->


     <div class="container">
     <h2> powred by boukernine </h2>
<form class="" action="post.php" method="post">
     <div class="row">
       <div class="col-md-4">
         <form class="" action="post.php" method="post">
           <div class="thumbnail">

               <img src="image/hot11.jpg" alt="Lights" style="width:100% ">
               <div class="caption">
                 <p>Restaurant</p>
                 <em><?php echo $moy; ?>/20</em>
               </div>
               <input type="text" name="n" value="" placeholder="qualité de nourriture">  <input type="text" name="sa" value="" placeholder="qualité de la salle">  <input type="text" name="s" value="" placeholder="qualité du service">
               <button type="submit" name="button">vote</button>
           </div>
         </form>

       </div>
       <div class="col-md-4">
         <div class="thumbnail">

             <img src="image/hot2.jpg" alt="Nature" style="width:100%">
             <div class="caption">
               <p>Alikase </p>
               <em><?php echo $moy1; ?>/20</em>
             </div>
             <input type="text" name="" value="" placeholder="qualité de nourriture">  <input type="text" name="" value="" placeholder="qualité de la salle">  <input type="text" name="" value="" placeholder="qualité du service">
             <button type="submit" name="button">vote</button>

         </div>
       </div>
       <div class="col-md-4">
         <div class="thumbnail">

             <img src="image/hot33.jpg" alt="Fjords" style="width:100%">
             <div class="caption">
               <p>bobo</p>
               <em><?php echo $moy2; ?>/20</em>
             </div>
             <input type="text" name="" value="" placeholder="qualité de nourriture">  <input type="text" name="" value="" placeholder="qualité de la salle">  <input type="text" name="" value="" placeholder="qualité du service">
             <button type="submit" name="button">vote</button>
         </div>
       </div>
     </div>
   </form>
   </div>

   </body>
 </html>
