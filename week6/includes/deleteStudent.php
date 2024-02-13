<?php 
  include 'connect.php';


  if(isset($_GET['delete'])){
    // print_r($_POST);  
    $id = $_GET["id"];
    

    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $query = "DELETE FROM students WHERE `id` = '$id'";
    $student = mysqli_query($connect, $query);

    if($student){
      // echo "success";
      header('Location: ../index.php');
      exit;
    }else
    {
      echo mysqli_error($connect);
    }
  }else{
    echo "You shouldn't be here!";
  }

  mysqli_close($connect);
?>
