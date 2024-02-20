<?php 

if(isset($_POST['update-submit'])){


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $marks = $_POST['marks'];
  $imageURL = $_POST['imageURL'];
  $id = $_POST['id'];


  include 'connect.php';


  $query = "UPDATE students SET `fname` ='$fname', `lname` ='$lname', `marks` ='$marks', `imageURL` ='$imageURL' WHERE `id` = '$id';";
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
