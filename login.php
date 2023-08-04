<?php
include './db_connect/db.php';
session_start();
    if(isset($_POST['login'])){
       
        $email = $_POST['userEmail'];
        $pass = $_POST['userPass'];

        $check = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
        $ex_check = mysqli_query($con,$check);

        $row = mysqli_fetch_array($ex_check);
        if($ex_check){
          $_SESSION['email'] = $row['email'];
          header("location:forhadFood.php");
        }
      
      
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
  </head>
  <body>
      <section>
        <div class="container">
            <div class="form-container">
                <div class="row">
                    <h3 class="text-center mb-5">Please Login !</h3>
                     <form method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" >
                         
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="userPass" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button name="login" class="btn px-5 btn-primary" id="loginBtn">Login</button>
                      </form>
                      
                </div>
            </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="./js/login.js"></script> -->
  </body>
</html>