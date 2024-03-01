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
           <h2>add users</h2>
           <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
        </div>
        <form action="index.php" method="post">
        <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>"
                     placeholder="enter your name" name="name"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"  value="<?php echo $email; ?>"
                     placeholder="enter your email" name="email"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control"  value="<?php echo $mobile; ?>"
                    placeholder="enter your phone number" name="mobile"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  value="<?php echo $password; ?>"
                    placeholder="password" name="password"
                        autocomplete="false">
                </div>
        </form>
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