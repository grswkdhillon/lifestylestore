<!doctype html>
<html lang="en">
  <head>
    <title>Produts-Lifestyle Store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style-sheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <?php
      include 'common.php';
      include 'header.php';
      include 'check-if-added.php';
    ?>

    
      <br> <br><br>
      <div class="container panel-margin">
          <div  class="jumbotron ">
            
              <h1 class="font-weight-bolder">Welcome <?php if(isset($_SESSION['email'])){echo "'".$_SESSION['user_fname']."'";} ?> to our Lifestyle Store!</h1>
              <p>We have the best cameras, watches and shirts for you. No need to hunt around, wehave all in one place.</p>
          </div>

          <div class="row text-center" id="cameras">
              <div class="col-md-3 col-sm-6">
                <div class="img-thumbnail">
                    <img src="images/5.jpg" width="100%" alt="camera">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:<i class="fa fa-rupee"></i>36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(1)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>

                    </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="img-thumbnail">
                    <img src="images/2.jpg" width="100%" alt="camera">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price:<i class="fa fa-rupee"></i>40000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(2)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                    </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="img-thumbnail">
                    <img src="images/3.jpg" width="100%" alt="camera">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:<i class="fa fa-rupee"></i>50000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(3)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                    </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="img-thumbnail">
                    <img src="images/4.jpg" width="100%" alt="camera">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:<i class="fa fa-rupee"></i>40000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(4)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                    </div>
                </div>
              </div>
          </div>
<br>
          <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/9.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>Titan Model #301</h3>
                      <p>Price:<i class="fa fa-rupee"></i>13000.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(5)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/10.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>Titan Model #201</h3>
                      <p>Price:<i class="fa fa-rupee"></i>3000.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(6)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/11.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>HMT Milan</h3>
                      <p>Price:<i class="fa fa-rupee"></i>8000.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(7)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/12.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>Faber Luba #111</h3>
                      <p>Price:<i class="fa fa-rupee"></i>18000.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(8)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
        </div>
<br>
        <div class="row text-center" id="shirts">
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/8.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>H&W</h3>
                      <p>Price:<i class="fa fa-rupee"></i>800.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(9)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/6.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>Luis Phil</h3>
                      <p>Price:<i class="fa fa-rupee"></i>1000.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(10)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/13.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>John Zok</h3>
                      <p>Price:<i class="fa fa-rupee"></i>1500.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(11)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-thumbnail">
                  <img src="images/14.jpg" width="100%" alt="camera">
                  <div class="caption">
                      <h3>Jhalsani</h3>
                      <p>Price:<i class="fa fa-rupee"></i>1300.00</p>
                      <?php
                        if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block text-white">Add to cart</a>
                        <?php } else{
                          if(check_if_added_to_cart(12)){
                         ?>
                         <a href="" class="btn btn-success btn-block text-white disabled" >Added to cart</a> 
                         <?php } 
                         else { ?>
                         <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block text-white">Add to cart</a> 
                         <?php }} ?>
                  </div>
              </div>
            </div>
        </div>
      </div>  

<br><br><br>      


<?php
    include 'footer.php';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>