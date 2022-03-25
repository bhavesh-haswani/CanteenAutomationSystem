<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Signinout/login.php');
} else {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="menu.css">

    <title>Menu</title>

    <style>
      HTML {
  height: 100%;
}

BODY {
  background: radial-gradient(circle, #b3cca2 0.75em, rgba(255, 255, 255, 0) 0.75em, rgba(255, 255, 255, 0) 1.5em, rgba(204, 195, 148, 0.7) 1.5em, rgba(204, 195, 148, 0.7) 1.8em, rgba(255, 255, 255, 0) 1.8em) 0 0, radial-gradient(circle, #ccc394 0.75em, rgba(255, 255, 255, 0) 0.75em, rgba(255, 255, 255, 0) 1.5em, rgba(179, 204, 162, 0.7) 1.5em, rgba(179, 204, 162, 0.7) 1.8em, rgba(255, 255, 255, 0) 1.8em) 3em 3em, radial-gradient(circle, rgba(179, 204, 162, 0.7) 0.375em, rgba(255, 255, 255, 0) 0.375em) 3em 0, radial-gradient(circle, rgba(204, 195, 148, 0.7) 0.3em, rgba(255, 255, 255, 0) 0.3em) 0 3em;
  background-size: 6em 6em;
  background-color: #F2DBA5;
  background-repeat: repeat;
  font: 16px/2 'Trebuchet MS', Verdana, sans-serif;
}
.h1 {
  
   background-image: url("https://i.pinimg.com/originals/ae/67/f8/ae67f8dfb7d0438a88cc55a5cad5c448.jpg");
  font-size: 40px;
  color: black;
  font-family: 'Times New Roman',  Times, serif; 
  margin-top: 5px; 
  text-align: center;
  font-weight: bold;
  

  
}
.lg {
  
   background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-summer-food-macaron-poster-background-image_25372.jpg");
    background-repeat: no-repeat;
   background-size: cover;
  font-size: 25px;
  color: black;
  font-family: 'Times New Roman',  Times, serif; 
  margin-top: 5px; 
  text-align: center;
  font-weight: bold;
  

  
}
h2{
	text-align: center;
	font-family: "Lucida Console";
	color: #990c58;

}

	.bg {
  /* The image used */
  background-image: url("https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-private-baked-dessert-shop-fresh-menu-recipes-image_173482.jpg");

  /* Full height */
  height: 50%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}
.logoutt{
width: 15%;
height: 50px;
background-color:white;
font-family:Lucida Handwriting;
border-style: solid;
border-width: medium;
font-size: 25px;  
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  </head>
  <body>
  <div><a  href="../Signinout/logout.php"><button class="logout">Log out</button></a></div> <!-- style="align:right;" -->
    <div class="box">
        <h1 class ="h1">～ MENU ～</h1>
        <hr>
        <form class="lg" action="../Menu/Menu.php" method="post">

          <h2>SOUPS</h2>
          <input type="checkbox" name="selected[]" value="Hot and Sour">
          <label > Veg. Hot and Sour soup   .............................. 50</label><br>
          <input type="checkbox" name="selected[]"  value="Manchau">
          <label >Veg. Manchau soup     ................................... 50</label><br>
          <input type="checkbox" name="selected[]"  value="Sweet corn">
          <label >Sweet corn soup   ...................................... 50</label><br>
          <input type="checkbox" name="selected[]"  value="Tomato">
          <label >Tomato soup   ........................................... 50</label><br>
            <hr>
          <h2>STARTERS AND DISHES</h2>
          <input type="checkbox" name="selected[]"  value="Chilly Gravy/Dry">
          <label > Chilly Gravy/Dry   ...................................... 70</label><br>
          <input type="checkbox" name="selected[]"  value="Manchurian Gravy/Dry">
          <label >Veg. Manchurian Gravy/Dry   ......................... 70</label><br>
          <input type="checkbox" name="selected[]"  value="65 Gravy/Dry">
          <label >Veg. 65 Gravy/Dry   .................................... 70</label><br>
          <input type="checkbox" name="selected[]"  value="Spring Roll">
          <label >Veg. Spring Roll   ....................................... 70</label><br>
          <input type="checkbox" name="selected[]"  value="Crispy">
          <label >Veg. Crispy   ............................................. 70</label><br>
          <input type="checkbox" name="selected[]"  value="Chinese Bhel">
          <label >Veg. Chinese Bhel   ..................................... 65</label><br>


          <hr>
          <h2>RICE AND NOODLES</h2>
          <input type="checkbox" name="selected[]"  value="Fried Rice">
          <label > Veg. Fried Rice  ........................................55</label><br>
          <input type="checkbox" name="selected[]"  value="Schezwan Rice">
          <label >Veg. Schezwan Rice  ...................................60</label><br>
          <input type="checkbox" name="selected[]"  value="Triple Rice">
          <label >Veg. Triple Rice  ........................................70</label><br>
          <input type="checkbox" name="selected[]"  value="Noodles">
          <label >Veg. Noodles  ............................................60</label><br>
          <input type="checkbox" name="selected[]"  value="Schezwan Noodles">
          <label >Veg. Schezwan Noodles  ...............................70</label><br>
          <input type="checkbox" name="selected[]"  value="Paneer Fried Rice">
          <label >Veg. Paneer Fried Rice  ................................70</label><br>

          <hr>
          <h2>HOT AND COLD BEVERAGES</h2>
          <input type="checkbox" name="selected[]"  value="Tea">
          <label > Tea.......................................................15</label><br>
          <input type="checkbox" name="selected[]"  value="Coffee">
          <label >Coffee....................................................30</label><br>
          <input type="checkbox" name="selected[]"  value="Sweet Lassi">
          <label >Sweet Lassi..............................................18</label><br>
          <input type="checkbox" name="selected[]"  value="Mosambi Juice">
          <label >Mosambi Juice..........................................35</label><br>
          <input type="checkbox" name="selected[]"  value="Apple Juice">
          <label >Apple Juice..............................................40</label><br>
          <input type="checkbox" name="selected[]"  value="Any Colddrink">
          <label >Any Colddrink...........................................40</label><br><br>


          <input class="btn" name="submit" type="submit" value="Submit">
         
        </form>
    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
<?php
} ?>

