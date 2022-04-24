<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style-sheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark nav-black" >
        <div class="container">
          <a href="index.php" class="navbar-brand active">Lifestyle Store</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#bar">
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div class="collapse navbar-collapse" id="bar">
            <ul class="navbar-nav ml-auto">
                <?php 
                if(isset($_SESSION['email'])){
                ?>   
                <li class="nav-item">
                    <a href="cart.php" class="nav-link"><i class="fa fa-shopping-cart"></i>Cart </a>
                  </li>
                <li class="nav-item">
                <a href="settings.php" class="nav-link"><i class="fa fa-gear"></i>Settings </a>
                </li>
                <li class="nav-item">
                <a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a>
                </li> 
                
                <?php
                }else{
                ?>

                <li class="nav-item">
                 <a href="signup.php" class="nav-link"><i class="fa fa-user"></i>Signup </a>
                </li>
                <li class="nav-item">
                <a href="login.php" class="nav-link"><i class="fa fa-sign-in"></i>Login</a>
                </li>
                <li class="nav-item"><a href="contact_us" class="nav-link"><span class="fa fa-phone"></span>Contact Us</a></li>
                <?php
                }
                ?>
            </ul>
          </div>
        </div>
      </nav>    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>