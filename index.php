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
            $errors = 'You need to enter a quote or author name.';
        } else {
            add_quote($quote, $author);
        }
        $title = 'Submit Quote';
        break;
    
    case 'quotes_popular':
        include 'view/quotes_popular.php';
        $title = 'Popular Quotes';
        break;
    
    case 'contact_us':
        include 'view/contact/contact.php';
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
    
    default:
        include('view/quotes_list.php');
        break;
}
?>
      </main>
      <?php
include('view/footer.php');

?>