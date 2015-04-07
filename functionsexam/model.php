<?php

/* 
 * Function Exam model
 */

/*  Get the Guitar1 database connection before anything else */

    $dsn = 'mysql:host=localhost;dbname=jordanz6_my_guitar_shop1';
    $username = 'jordanz6';
    $password = '731731jBh91!';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print $e->getMessage();
    }


/*
 * Write the first function using the following SQL to query the Guitar1 database
 
    $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
 
 * Use a try - catch block to handle exceptions
 * Use a prepared statement inside the try to execute the query
 * The result of the query should be an array
 * Be sure to return the array if it has data or 'FALSE' if no data was retrieved
 */
    
function get_category() {
    global $db;
    
    try {
        $query = 'SELECT DISTINCT products.categoryID, categoryName '
                . 'FROM products INNER JOIN categories '
                . 'WHERE products.categoryID = categories.categoryID';
        $statement = $db->prepare($query);
        $statement->execute();
        $navList = $statement->fetchAll();
        $statement->closeCursor();
        
        // test what information was retrieved from database.
        echo '<pre>';
        print_r($navList);
        echo '</pre>';
        
        if (empty($navList)) {
            return 'False';
        } else {
            return $navList;
        }
    } catch (PDOException $e) {
        print $e;
    }
}



/* 
 * Write the second function following this comment block
 
 * The function should be named "buildNav" and retrieve the needed 
 * information by calling the first function.
 
 * Then, the function should build an unordered list
 * placing each item retrieved from the database in an anchor element in a list item.
 * The entire list should be stored in a variable named $navigation.
 
 * If nothing is retrieved from the database, use the same $navigation variable 
 * to store an error message.
 
 * Finally, return $navigation (it was called in the controller).
 */

function buildNav() {
    $navList = get_category();
    if (is_array($navList)) { ?>
        <?php $navigation = '<ul>'; ?>
        <?php foreach ($navList as $item) { ?>
        <?php $navigation .= '<li><a href="functionsexam?category="' . $item[1] . '" title=" View Our' . $item[1] . '">' . $item[1] . '</a></li>'; ?>
        <?php } ?>
<?php $navigation .= '</ul>'; ?>
    <?php } else {
        $navigation = 'There are no categories to display';
    }
    
    return $navigation;
}