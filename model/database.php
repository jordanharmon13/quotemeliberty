<?php
    $dsn = 'mysql:host=69.195.124.155;dbname=jordanz6_quote_me_liberty';
    $username = 'jordanz6';
    $password = '731731jBh91!';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    
    function get_quotes() {
        global $db;
        $query = 'SELECT * FROM `quotes`';
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    
    function get_quote($quoteID) {
        global $db;
        $query = 'SELECT * '
                . 'FROM quotes '
                . 'WHERE quoteID = ' . intval($quoteID);
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
        }
    
    function add_quote($quote, $author) {
        global $db;
        $query = "INSERT INTO `jordanz6_quote_me_liberty`.`quotes` (`quote`, `submitDate`, `quoteID`, `author`) "
                . "VALUES ('$quote', NOW(), NULL, '$author')";
        $statement = $db->prepare($query);
        $statement->bindValue('quote', $quote);
        $statement->bindValue('author', $author);
        $statement->execute();
        $result = $statement->closeCursor();
        return $result;
    }
?>
