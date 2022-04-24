<!doctype html>
<html lang="en">
  <head>
    <title>Cart</title>
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
        header('location:login.php');
      }
      echo "<br><br><br>";
      $sum=0;
      $user_id=$_SESSION['user_id'];
      $select_query="SELECT products.price AS Price, products.id, products.name AS Name FROM users_products INNER JOIN products ON users_products.item_id=products.id WHERE users_products.user_id='$user_id' AND status='Added to cart'";
      $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
      if(mysqli_num_rows($result)>=1){
    ?>

    

      <div class="container cont-mb-cart">
        <table class="table table-hover table-bordered text-center">
          <tbody>
            <tr>
              <th>Item number</th>
              <th>Item name</th>
              <th>Price</th>
              <th></th>
            </tr>
            <?php
              while($row=mysqli_fetch_array($result)){
                $sum+=$row['Price'];
                $id="";
                $id=$row['id'];
                echo " <tr>
                      <td>". $row['id']." </td>
                      <td>". $row['Name']." </td>
                      <td>Rs". $row['Price'] ."</td>
                      <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td>
                  </tr>"; 
              }?> <?php
              $ids=rtrim($id,",");
              echo " <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Rs".$sum."</td>
                    <td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                  </tr>";
                  ?>
  
           </tbody>
           <?php } else {
             echo "<h2  style='color:red;padding:10px;text-align:center;'>Add items to the cart first!</h2>";
           } ?>
      </table>
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