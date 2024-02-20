<?php 

if(isset($_POST['submit'])){


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $marks = $_POST['marks'];
  $imageURL = $_POST['imageURL'];


  include 'connect.php';


  $query = "INSERT INTO students (fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL');";
  echo $query;


  $student = mysqli_query($connect, $query);


  if($student){
    echo "Success";
    header("Location:../index.php");
  }
  else {
    echo "Failed: " . mysqli_error($connect);
    print_r($student);
  }

}
else {
  echo "You should not be here.";
}

mysqli_close($connect);
?>
