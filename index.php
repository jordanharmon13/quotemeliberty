<?php
require_once('model/database.php');

$title;

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
        $title = 'Quote Me Liberty';
        include('view/header.php');
        include 'view/quotes_list.php';
        break;
    
    case 'quote_add':
        
        $title = 'Add Quote';
        include('view/header.php');
        include 'view/quote_add.php';
        break;
    
    case 'Submit Quote':
        $title = 'Submit Quote';
        include('view/header.php');
        $quote = filter_input(INPUT_POST, 'quote');
        $author = filter_input(INPUT_POST, 'author');
        if (empty($quote) || empty($author)) {
            $errors = 'You need to enter a quote or author name. Go back and try again.';
            echo $errors;
            break;
        } else {
            add_quote($quote, $author);
        }
        include('view/quote_added.php');
        break;
    
    case 'quotes_popular':
        $title = 'Popular Quotes';
        include('view/header.php');
        include 'view/quotes_popular.php';
        break;
    
    case 'contact_us':
        $title = 'Contact Us';
        include('view/header.php');
        include 'view/contact/index.php';
        break;
    
    case 'teaching_presentation':
        $title = 'Teaching Presentation';
        include('view/header.php');
        include 'view/phpexam/teaching_presentation.php';
        break;
    
    case 'quote_page':
        $title = 'Quote';
        include('view/header.php');
        include 'view/quote_page.php';
        break;
    
    case 'about_us':
        $title = 'About Us';
        include('view/header.php');
        include 'view/about_us.php';
        break;
    
    case 'quote_delete':
        $title = 'Delete Quote';
        include('view/header.php');
        $quoteID = filter_input(INPUT_GET, 'quoteID');
        $delete_quote = delete_quote($quoteID);
        include'view/quote_deleted.php';
        break;
    
    case 'quote_edit':
        $title = 'Edit Quote';
        include('view/header.php');
        include('view/quote_edit.php');
        break;
    
    case 'Update Quote':
        $title = 'Update Quote';
        include('view/header.php');
        include('view/quote_edited.php');
        break;
    
    default:
        $title = 'Quote Me Liberty';
        include('view/header.php');
        include('view/quotes_list.php');
        break;
}
?>
      </main>
      <?php
include('view/footer.php');

?>