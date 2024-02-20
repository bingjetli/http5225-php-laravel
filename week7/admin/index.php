<?php
include('../includes/connect.php');
include('../includes/functions.php');

if(isset($_POST['admin-login'])){

  $query = 'SELECT * FROM users WHERE email = "'.$_POST["email"].'" AND password = "'.md5($_POST["password"]).'" LIMIT 1';


  $result = mysqli_query($connect, $query);

  if($result){

    if(mysqli_num_rows($result)){
      $record = mysqli_fetch_assoc($result);
      $_SESSION['id'] = $record['id'];
      header("Location: ../index.php");
    }
    else{
      set_message("Incorrect Username / Password");
    }

  }
  else {
    set_message(mysqli_error($connect));
  }


}

get_message();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 "
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <?php include '../includes/nav.php' ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-5 mt-4 mb-4">Login</h1>
        </div>
      </div>

      <div class="row">

        <form method="POST" action="">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" name="email"/>
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" class="form-control" name="password" />
            <label class="form-label" for="password">Password</label>
          </div>


          <!-- Submit button -->
          <input type="submit" name="admin-login" class="btn btn-primary btn-block mb-4" value="Sign in">

        </form>

      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
