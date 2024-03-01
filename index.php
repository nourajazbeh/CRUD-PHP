<?php

if(isset($_POST['save'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  
  $add_sql="INSERT INTO 'users'( 'name','email', 'password', 'mobile') VALUES ('$name','$email','$password','$mobile')";
  
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>user</title>
</head>

<body>
    <div class="container">
      <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-contevt-between">
        <div class="d-flex p-2 justify-content-between mb-2">
           <h2>All users</h2>
           <div><a href="add_user.php"><i data-feather="user-plus"></i></a></div>


        </div>

      </div> 
     
    </div>
    APP
    <i data-feather="user-plus"></i>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/icons.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>