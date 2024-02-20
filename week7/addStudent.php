<?php 
  if(isset($_POST['submit'])){
    // print_r($_POST);  
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $marks = $_POST["marks"];
    
    $connect = mysqli_connect('localhost', 'root', 'root', 'php');
    if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
    }

    #$query = "INSERT INTO students (fname, lname, marks, grade) VALUES ('$fname', '$lname', '$marks', 'A')";
    # using 'mysqli_real_escape_string()' to sanitize and escape the SQL statements.
    $query = "INSERT INTO students (fname, lname, marks, grade) VALUES (
      '".mysqli_real_escape_string($connect, $fname)."',
      '".mysqli_real_escape_string($connect, $lname)."',
      '".mysqli_real_escape_string($connect, $marks)."',
      '".mysqli_real_escape_string($connect, $imageURL)."',

    )";
    $student = mysqli_query($connect, $query);
    if($student){
      echo "Success";
    }else
    {
      echo "Error" . mysqli_error($connect);
    }
  }else{
    echo "You shouldn't be here!";
  }
  mysqli_close($connect);
?>
