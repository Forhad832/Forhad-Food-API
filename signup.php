<?php
include './db_connect/db.php';

    if(isset($_POST['signUp'])){
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $pass = $_POST['userPass'];

        if(empty($name) && empty($email) && empty($pass)){
            echo "<script>alert('Required All input field')";
        }else{

            $insert = "INSERT INTO users(name,email,pass) VALUES('$name','$email','$pass')";

            $ex = mysqli_query($con,$insert);

            if($ex){
            echo "<script>alert('successfully create a account')";

            }else{
            echo "<script>alert('failed to create account please try again !')";

            }
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
                     <form method="post" enctype="multipart/form-data">
                     <div class="mb-3">
                          <label for="userName" class="form-label">Name</label>
                          <input type="text" name="userName" class="form-control border" id="userName" >
                         
                        </div>
                        <div class="mb-3">
                          <label for="userEmail" class="form-label">Email address</label>
                          <input type="email" name="userEmail" class="form-control" id="userEmail" >
                         
                        </div>
                        <div class="mb-3">
                          <label for="userPass" class="form-label">Password</label>
                          <input type="password" name="userPass" class="form-control" id="userPass">
                        </div>
                        
                        <button  class="btn px-5 btn-primary" name="signUp">Sign Up</button>
                        <a href="login.php"><button class="btn btn-success px-5">Login</button></a>
                      </form>
                      
                </div>
            </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
  </body>
</html>