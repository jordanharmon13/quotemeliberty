<?php
require_once('model/database.php');

include('view/header.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'quotes_list';
    }
}

$errors = array();

switch ($action) {
    case 'quotes_list':
        include 'view/quotes_list.php';
        break;
    
    case 'quote_add':
        include 'view/quotes_list.php';
        break;
    
    case 'Submit Quote':
        $quote = filter_input(INPUT_POST, 'quote');
        $author = filter_input(INPUT_POST, 'author');
        if (empty($quote) || empty($author)) {
            $errors = 'You need to enter a quote or author name.';
        } else {
            add_quote($quote, $author);
        }
        break;
    
    case 'quotes_popular':
        include 'view/quotes_list.php';
        break;
    
    case 'contact_us':
        include 'contact/contact.php';
        break;
    
    case 'teaching_presentation':
        include 'phpexam/teaching_presentation.php';
        break;
    
    case 'quote_page':
        include 'view/quotes_list.php';
        break;
    
    default:
        include('view/quotes_list.php');
        break;
}

include('view/footer.php');

?>