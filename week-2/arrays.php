<!doctype html>
<html>
<head>
    <title>Links and Arrays</title>
</head>
<body>
    
    <h1>Links and Arrays</h1>
    
    <p>Use PHP echo and arrays to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    ?>


    <?php 
      echo '<h1>'.$link['name'].'</h1>';
      echo '<h2>'.$link['url'].'</h2>';
      echo '<h2>'.$link['image'].'</h2>';
      echo '<h2>'.$link['description'].'</h2>';
    ?>
        
</body>