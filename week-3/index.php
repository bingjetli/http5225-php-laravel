<!doctype html>
<html>
  <head>
    <title>PHP If Statements</title> 
  </head>
  <body>

    <h1>PHP If Statements</h1> 

    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

    <?php

    // **************************************************
    // Do not edit this code

    // Generate a random number (1, 2, or 3)
    $randomNumber = ceil(rand(1,3));

    // Display the random number
    echo '<p>The random number is '.$randomNumber.'.</p>';

    // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
    
    // The random number is 1, so use Codecademy
    if ($randomNumber == 1)
    {

      $linkName = 'Codecademy';
      $linkURL = 'https://www.codecademy.com/';
      $linkCTA = 'Codecademy';
      $linkImage = '';
      $linkDescription = 'Learn to code interactively, for free.';

    }

    // The random number is 2, so use W3Schools
    elseif ($randomNumber == 2)
    {

      $linkName = '';
      $linkURL = 'https://www.w3schools.com/';
      $linkCTA = 'W3Schools';
      $linkImage = 'w3schools.png';
      $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

    }

    // The random number is 3, so use MDN
    else
    {

      $linkName = 'Mozilla Developer Network';
      $linkURL = 'https://www.codecademy.com/';
      $linkCTA = 'Mozilla';
      $linkImage = 'mozilla.png';
      $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

    }

    // **************************************************

    // Beginning of the exercise, place all of your PHP code here
    // Upload this page (or use your localhost) and refresh the page, the h2 below will change
    echo "<h2>".$linkName."</h2>";
    //echo "<p>".$linkURL."</p>";
    if($linkURL !== ''){
      echo "<a href=".$linkURL.">".$linkURL."</a>";
    }
    else {
      echo "<p>".$linkCTA."</p>";
    }
    echo "<img src=".$linkImage." alt-text=testing />";
    echo "<p>".$linkDescription."</p>";


    $random_grade = ceil(rand(0,100));
    echo "<p>".$random_grade."</p>";

    if($random_grade <= 60){
      echo "<p> FAILED : <strong>F</strong>, try harder.</p>";
    }
    else if($random_grade <= 70){
      echo "<p> PASS : <strong>E</strong>, put more effort</p>";
    }
    else if($random_grade <= 75){
      echo "<p> PASS : <strong>D</strong>, doing better</p>";
    }
    else if($random_grade <= 80){
      echo "<p> PASS : <strong>C</strong>, fair</p>";
    }
    else if($random_grade <= 85){
      echo "<p> PASS : <strong>B</strong>, getting better</p>";
    }
    else if($random_grade <= 90){
      echo "<p> PASS : <strong>A</strong>, great job</p>";
    }
    else {
      echo "<p> PASS : <strong>A+</strong>, excellent</p>";
    }



    $random_day = ceil(rand(1,7));
    switch($random_day){
      case 1:
        echo "<p> MONDAY : let's get this bread.</p>";
        break;
      case 2:
        echo "<p> TUESDAY : time to get to work.</p>";
        break;
      case 3:
        echo "<p> WEDNESDAY : it is wednesday my dudes.</p>";
        break;
      case 4:
        echo "<p> THURSDAY : it's almost friday.</p>";
        break;
      case 5:
        echo "<p> FRIDAY : time to get lit🔥</p>";
        break;
      case 6:
        echo "<p> SATURDAY : popping bottles in the club</p>";
        break;
      case 7:
        echo "<p> SUNDAY : ohh god...</p>";
        break;
    }
    ?>



  </body>
</html>
