<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <?php include('includes/nav.php'); ?>
  <?php include('includes/connect.php'); ?>
  <?php 
    if(isset($_GET['update'])){
      // print_r($_POST);  
      $id = $_GET["id"];

      $query = "SELECT * FROM students WHERE `id` = '$id'";
      $student = mysqli_query($connect, $query);
      if($student){
        // echo "success";
        // header('Location: index.php');
        // exit;

        $result = $student -> fetch_assoc();

        print_r($result);
        
      }else
      {
        echo mysqli_error($connect);
      }
    }
    else{
      echo "You shouldn't be here!";
    }
  ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 mt-5 mb-4">
          Update Grade
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <form method="POST" action="includes/updateStudent.php">

        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First Name" value="<?php echo $result['fname'] ?>">
        </div>

        <div class="mb-3">
          <label for="lname" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last Name" value="<?php echo $result['lname'] ?>">
        </div>

        <div class="mb-3">
          <label for="marks" class="form-label">Marks</label>
          <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Marks" value="<?php echo $result['marks'] ?>">
        </div>

        <div class="mb-3">
          <label for="imageURL" class="form-label">Image URL</label>
          <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Image URL" value="<?php if(isset($result['imageURL'])) { echo $result['imageURL']; } else { echo ''; } ?>">
        </div>

        <input type="hidden" name="update-submit" value="true">
        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">

        <button type="submit" name="submit" class="btn btn-primary">Update Student </button>

      </form>
      </div>
    </div>
  </div>


</body>
</html>
