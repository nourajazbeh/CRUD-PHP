<?php
include_once('db.php');
$action = false;

if(isset($_POST['save'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  
  $add_sql = "INSERT INTO 'users'( 'name','email', 'password', 'mobile') VALUES
  ('$name','$email','$password','$mobile')";
  $res_add =mysqli_query($con, $add_sql);
  if(!$res_add) {
    die(mysqli_error($con));

  } else {
    $action = "add";
  }

}
if(isset($_GET['action']) && $_GET['action']=='del'){
  $del_sql="DELETE FROM users WHERE id = $id";
  $res_del = mysqli_query($con, $del_sql);
  if (!$res_add) {
    die(mysqli_error($con));


  } else {
    $action = "del";
  }
}
  $add_sql = "SELECT * FROM users";
  $all_user = mysqli_query($con, $users_sql);
  

?>?

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/toster.css">

    <title>user</title>
</head>

<body>
    <div class="container">
      <div class="wrapper p-5 m-5">
        <div class="d-flex p-2 justify-contevt-between">
           <h2>All users</h2>
           <div><a href="add_user.php"><i data-feather="user-plus"></i></a></div>

        </div>
        <table class="table table-striped">
         <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Action</th>
            </tr>
          </thead> 
          </tbody> 
          <?php

        while ($user = $all_user->fetch_assoc()) { ?>
          
           <tr>

            <td>
              <?php echo $user['id']; ?>

            </td>
            <td>
              <?php echo $user['name']; ?>
            </td> 
            <td>
        
           <?php echo $user['email']; ?>
              </td>
              <td>
                <?php echo $user['mobile']; ?>
              </td>

              <td>
              <div class="d-flex p-2 justify-contevt-evenly mb-2">

                 <i onblick="confirm_delete(<?php echo $user['id']; ?>" class="text-danger" data-feather="trash-2"></i>
                 <i onclick="edit(<?php echo $user['id']; ?>);"class="text-success"data-feather="edit"></i>   

                </div>
              </td>
            </tr>  
         <?php }
            ?>
          </tbody>
         </table>
        </div> 
     
      </div>
      <script src="js/jg.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/icons.js"></script>
    <script src="js/toster.js"></script>
    <script src="js/main.js"></script>
    <?php

    if ($action != false) {
      if ($action == 'add') { ?>
        <script>
          show_add()
        </script>

    <?php
   }    
    
    if ($action == 'del') { ?>
      <script>
        show_del()
      </script>


      <?php
    }
    if ($action == 'edit') { ?>
      <script>
        show_update()
      </script>


      <?php
    }
  }

  ?>
  <script>
    feather.replace();
  </script>
</body>