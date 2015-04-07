<?php
/* ***************************************
 * DB and SQL Exam model
 * **************************************/

/* ***************************************
 * Get access to the database connection
 * **************************************/

$dsn = 'mysql:host=localhost;dbname=jordanz6_my_guitar_shop1';
$username = 'jordanz6';
$password = '731731jBh91!';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    print $ex->getMessage();
}



/* ***************************************
 * Get navigation items from database
 * **************************************/
function getNavigation() {
   global $db;
  try {
    $sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $navList = $stmt->fetchAll();
    $stmt->closeCursor();
  } catch (PDOException $exc) {
    header('location: ./error.php');
    exit;
  }
  if (!empty($navList)) {
    return $navList;
  } else {
    return FALSE;
  }
}

/* ***************************************
 * Get the list of items by category
 * **************************************/
function getCategoryItems($category) {
    global $db;
  try {
      $sql = 'SELECT * FROM products '
              . 'WHERE categoryID = :category '
              . 'ORDER BY productID';
      $stmt = $db->prepare($sql);
      $stmt->bindValue(':category', $category);
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();
      
  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Get item based on its key
 * **************************************/
function getItem($productid) {

    global $db;
  try {
      $sql = 'SELECT listPrice '
              . 'FROM products '
              . 'WHERE productID = :productid';
      $stmt = $db->prepare($sql);
      $stmt->bindValue(':productid', $productid);
      $stmt->execute();
      $results = $stmt->fetchAll();
      $stmt->closeCursor();


  } catch (Exception $ex) {
    header('location: ./error.php');
    exit;
  }
  if(!empty($results)){
    return $results;
  } else{
    return FALSE;
  }
}

/* ***************************************
 * Build the navigation menu list
 * **************************************/
function buildNav(){
  $navItems = getNavigation();
  if(is_array($navItems)){
    $navigation = '<ul>';
    foreach ($navItems as $item) {
      $navigation .= "<li><a href='/dbsqlexam?action=q&amp;category=$item[0]' title='View our $item[1]'>$item[1]</a></li>";
    }
    $navigation .= '</ul>';
  } else {
    $navigation = 'Sorry, a critical error occurred.';
  }
  return $navigation;
}