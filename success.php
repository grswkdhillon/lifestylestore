<!doctype html>
<html lang="en">
  <head>
    <title>Successful-Lifestyle Store</title>
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
      if(!isset($_SESSION['email'])){
        header('location:index.php');
      }
      $user_id=$_SESSION['user_id'];

      $fetch_query="SELECT item_id FROM users_products WHERE user_id='" .$user_id. "'";
      $result=mysqli_query($con , $fetch_query) or die(mysqli_error($con));
      while($row = mysqli_fetch_array($result)){
        $item_id=$row['item_id'];
        $change_query="UPDATE users_products SET status='Confirmed' WHERE user_id='".$user_id. "' AND status='Added to cart' AND item_id='" .$item_id. "'";
        $result1=mysqli_query($con,$change_query) or die(mysqli_error($con)) ;

      }
      
    ?>

<br><br><br>      
      
      <div class="container">
          <div class="alert alert-success">
            Your order is confirmed. Thank you for shopping with us. ​<a href="products.php">Click here​</a> to purchase any other item.
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