<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Links and Variables</title>
</head>
<body>
  <h1>Links and Variables</h1>
  
  <p>Use PHP echo and variables to output the following link information:</p>
      
  <hr>
  
  <?php
  
  $linkName = 'Codecademy';
  $linkURL = 'https://www.codecademy.com/';
  $linkImage = 'codecademy.png';
  $linkDescription = 'Learn to code interactively, for free.';
  
  ?>


  <?php 
    echo '<h1>'.$linkName.'</h1>';
    echo '<h1>'.$linkURL.'</h1>';
    echo '<h1>'.$linkImage.'</h1>';
    echo '<h1>'.$linkDescription.'</h1>';
    echo '<pre>testing'.PHP_EOL.'testing</pre>';
  ?>
</body>
</html>