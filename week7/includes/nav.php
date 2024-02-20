<?php
$subfolder = "/week7";

$index_nav = $subfolder."/index.php";
$grades_nav = $subfolder."/admin/add.php";
$users_nav = $subfolder."/admin/users.php";
?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
<a class="navbar-brand" href="<?php echo $index_nav ?>">Student Portal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo $index_nav ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $index_nav ?>">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $grades_nav ?>">Grades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $users_nav ?>">Users</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
