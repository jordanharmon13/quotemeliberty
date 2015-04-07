<?php
// Create the navigation bar here meeting the requirements listed in step 2
// Do NOT alter the original array on line 4, use it as is
  $countries = array('Europe', 'Africa', 'North America', 'Antarctica', 'Asia', 'South America', 'Oceania');
  sort($countries);
  array_unshift($countries, 'Home');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View | PHP Travel Site</title>
    <meta name="author" content="Jordan Harmon">
  </head>
  <body>
    <header>
      <h1>PHP Travel Site</h1>
    </header>
    <nav>    
        <?php foreach ($countries as $country) : ?>
        <ul>
            <li><a href="index.php?action=<?php echo $country; ?>">
                <?php echo $country; ?></a></li>
        </ul>
        <?php endforeach; ?>
        <?php
        // The navigation bar (step 2) will display here in the browser
        // Do NOT alter this code block
      	echo $navbar;
      ?>
    </nav>
    <main>
      <?php
        // The content from the controller (step 3) will display here in the browser
        // Do NOT alter this code block
      	echo $content;
      ?>
    </main>
    <footer>
        
    </footer>
  </body>
</html>