<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php

    echo '<h1>PHP and Creating Output</h1>';

    echo '<p>The PHP echo command can be used to create output.</p>';

    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';
    
    echo '<ul>';
        echo '<li>Use HTML special characters</li>';
        echo '<li>Alternate between single and double quotes</li>';
        echo '<li>Use a backslash to escape quotes</li>';
    echo '</ul>';
    
    echo '<h2>More HTML to Convert</h2>';

    echo '<p>PHP says "Hello World!"</p>';

    echo '<p>Can you display a sentence with \' and "?</p>';

    echo '<img src=php-logo.png>';

    ?>
  
    <!--
    <p>The PHP echo command can be used to create output.</p>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ''' and """?</p>

    <img src="php-logo.png">
    -->

  </body>
</html>
