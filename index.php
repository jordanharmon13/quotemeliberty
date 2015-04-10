<?php
require_once('model/database.php');

$title;

include('view/header.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'quotes_list';
    }
}

$errors = array(); ?>

<main>

<?php

switch ($action) {
    case 'quotes_list':
        include 'view/quotes_list.php';
        $title = 'Quote Me Liberty';
        break;
    
    case 'quote_add':
        include 'view/quote_add.php';
        $title = 'Add Quote';
        break;
    
    case 'Submit Quote':
        $quote = filter_input(INPUT_POST, 'quote');
        $author = filter_input(INPUT_POST, 'author');
        if (empty($quote) || empty($author)) {
            $errors = 'You need to enter a quote or author name. Go back and try again.';
            echo $errors;
            break;
        } else {
            add_quote($quote, $author);
        }
        $title = 'Submit Quote';
        include('view/quote_added.php');
        break;
    
    case 'quotes_popular':
        include 'view/quotes_popular.php';
        $title = 'Popular Quotes';
        break;
    
    case 'contact_us':
        include 'view/contact/index.php';
        $title = 'Contact Us';
        break;
    
    case 'teaching_presentation':
        include 'view/phpexam/teaching_presentation.php';
        $title = 'Teaching Presentation';
        break;
    
    case 'quote_page':
        include 'view/quote_page.php';
        $title = 'Quote';
        break;
    
    case 'about_us':
        include 'view/about_us.php';
        $title = 'About Us';
        break;
    
    case 'quote_delete':
        $quoteID = filter_input(INPUT_GET, 'quoteID');
        $delete_quote = delete_quote($quoteID);
        include'view/quote_deleted.php';
        break;
    
    case 'quote_edit':
        include('view/quote_edit.php');
        break;
    
    case 'Update Quote':
        include('view/quote_edited.php');
        break;
    
    default:
        include('view/quotes_list.php');
        break;
}
?>
      </main>
      <?php
include('view/footer.php');

?>