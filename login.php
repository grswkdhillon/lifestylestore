<!doctype html>
<html lang="en">
  <head>
    <title>Login-Lifestyle Store</title>
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
          session_start();
          if(isset($_SESSION['email'])){
            header('location:products.php');
          }
      include 'common.php';
      include 'header.php';
      
    ?>

      <br><br><br>
      <div class="container cont-mb-login" >
        <div class="row row_style ">
          <div class="col-md-5 mx-auto">
              <div class="card">
                <div class="card-header bg-primary text-white">
                    LOGIN
                </div>
                <div class="card-body">
                    <p class="card-title text-warning"> Login to make a purchase</p>
                    <form method="POST" action="login_submit.php">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                      </div>
                      <button type="submit" name="login" class="btn btn-primary">login</button><br><br>
                      <?php
                      if(isset($_GET['error'])){?>
                      <p class="alert alert-danger" style="color:red;text-align:center;">Sorry! Your email & password doesn't match.</p>
                      <?php } ?>
                    </form>
                </div>
                <div class="card-footer">
                    Don't have an account?<a href="signup.php" class="">Register</a>
                </div>
              </div>
            </div>  
          </div>    
        </div>
    </div>
    

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