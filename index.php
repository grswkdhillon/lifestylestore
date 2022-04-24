<!doctype html>
<html lang="en">
  <head>
    <title>Home-Lifestyle Store</title>
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
      if(isset($_SESSION['email'])){
        header('location:products.php');
      }
      include 'header.php';

    ?>
      <br><br>
      <div id="banner_image">
        <div class="container">
          <div class="mx-auto" id="banner_content">
            <h1>We sell lifestyle</h1>
            <p>Flat 40% off on premium brands</p>
            <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
          </div>
        </div>        
      </div>
<br><br>

      <div class="container" >
        <div class="row text-center rz">
          <div class="col-md-4">
            <div class="border border-dark">
              <a href="products.php#cameras" style="color:black">
                <img src="images/camera.jpg" class="img-thumbnail mb-3" alt="camera" width="100%">
                  <div class="caption">
                    <h2>Cameras</h2>
                    <p>Choose among the best available oin the world.</p>
                  </div>
                </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border border-dark">
              <a href="products.php#watches" style="color:black">
                <img src="images/watch.jpg" class="img-thumbnail mb-3" alt="camera" width="100%">
                <div class="caption">
                    <h2>Watches</h2>
                    <p>Original watches from the brands.</p>
                </div>
                </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border border-dark">
              <a href="products.php#shirts" style="color:black">
                <img src="images/shirt.jpg" class="img-thumbnail mb-3" alt="camera" width="100%">
                <div class="caption">
                    <h2>Shirts</h2>
                    <p>Our exquisite collection of shirts.</p>
                </div>
                </a>
            </div>
          </div>
        </div>
      </div>
<br><br><br><br>
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