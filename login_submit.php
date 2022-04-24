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
      <?php
        include 'common.php';
        $email = $_POST['email'];
        $email = mysqli_real_escape_string($con, $email);
        $password=$_POST['password'];      
        $password = mysqli_real_escape_string($con, $password);
        $password = MD5($password);

        // Query checks if the email and password are present in the database.
        $query = "SELECT id, first_name, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        $num = mysqli_num_rows($result);
        // If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
        if ($num == 0) {

          header('location: login.php?error=1');
        } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_fname']=$row['first_name'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
        }
        ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>