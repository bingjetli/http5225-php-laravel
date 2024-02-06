<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 "
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-5 mt-4 mb-4"></h1>
        </div>
      </div>

      <div class="row">

        <?php 
          $connect = mysqli_connect("localhost", "root", "root", "http5225");

          $query = "SELECT id, fname, lname, marks, grade, imageURL FROM students";

          $students = mysqli_query($connect, $query);

        if(mysqli_connect_error()){
          die("Connect error : ". mysqli_connect_error());
        }

        foreach($students as $s){

        if($s['marks'] < 50){
          $bg_class = 'bg-danger';
        }
        else {
          $bg_class = 'bg-success';
        }


        echo '<div class="col-md-4">
                <div class="card '.$bg_class.'" style="width: 18rem;">
                  <img src="'.$s['imageURL'].'" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">'.$s['fname'].' '.$s['lname'].'</h5>
                    <p class="card-text">Performance : '.$s['marks'].' ( '.$s['grade'].' )'.'</p>
                  </div>
                </div>
              </div>';

        }


        ?>

      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
