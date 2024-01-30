<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP & For Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

    <?php 
      function getUsers(){
        $url = 'https://jsonplaceholder.typicode.com/users';
        $data = file_get_contents($url);
        return json_decode($data, true);
      }


      $users = getUsers();


      echo "<pre>";
      echo print_r($users);
      echo "</pre>";

      echo '<div class="row justify-content-around">';
      for($i = 0; $i < 10; $i++){
        echo '<div class="card" style="width: 18rem;">';
          echo '<img src="https://www.shutterstock.com/shutterstock/photos/1037719192/display_1500/stock-vector-default-ui-image-placeholder-for-wireframes-for-apps-and-websites-1037719192.jpg" class="card-img-top" alt="...">';
          echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$users[$i]["name"].'</h5>';
            echo '<p class="card-text">';

            echo '<p>@'.$users[$i]["username"].'</p>';
            echo '<p>Address : '.$users[$i]["address"]["suite"].' '.$users[$i]["address"]["street"].', '.$users[$i]["address"]["city"].'</p>';
            echo '<div>Phone : '.$users[$i]["phone"].'</div>';
            echo '<div>Website : <a href="'.$users[$i]["website"].'">'.$users[$i]["website"].'</a></div>';
            echo '<div>Email : <a href="mailto:'.$users[$i]["email"].'">'.$users[$i]["email"].'</a></div>';

            echo '</p>';
            echo '<a href="\#" class="btn btn-primary">Go somewhere</a>';
          echo '</div>';
        echo '</div>';
      }
      echo '</div>';
    ?>

    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
