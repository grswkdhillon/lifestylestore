<!doctype html>
<html lang="en">
  <head>
    <title>Settings-Lifestyle Store</title>
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
      
      
      if(isset($_GET['error'])){
        $signal=$_GET['error'];
      }else{
      $signal="";}
    ?>
<br><br><br><br>    

  <div class="container cont-mb-settings">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <form method="post" action="settings_script.php">
            <h3>Change Password</h3>  
              <div class="form-group">
                <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
              </div>
               <div class="text-danger font-weight-bold">
              <?php 
              if($signal=='Old password is wrong.'){
                  echo $_GET['error']."<br><br>";}
              
                ?>
                </div>
              
             
              <div class="form-group">
                <input type="password" class="form-control" name="newpassword" placeholder="New Password">
              </div>
              <div class="text-danger font-weight-bold">
              <?php 
              if($signal=='New passwords doesnot match.'){ 
                echo $_GET['error']."<br><br>";
             
              }?>
                </div>

              <div class="form-group">
                <input type="password" class="form-control" name="repnewpassword" placeholder="Re-type New Password">
              </div>
              <div class="text-success font-weight-bold">
              <?php 
              if($signal=='Password updated successfully.'){ 
                echo $_GET['error']."<br><br>";
           
              }
                ?>
                </div>
    
              <button class="btn btn-primary">Change</button>
          </form>
        </div>
      </div>
  </div>    

<?php include 'footer.php';

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>