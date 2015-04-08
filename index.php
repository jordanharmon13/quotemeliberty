<main>
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
        include 'view/quote_add.php';
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
        include 'view/quotes_popular.php';
        break;
    
    case 'contact_us':
        include 'view/contact/contact.php';
        break;
    
    case 'teaching_presentation':
        include 'view/phpexam/teaching_presentation.php';
        break;
    
    case 'quote_page':
        include 'view/quote_page.php';
        break;
    
    case 'about_us':
        include 'view/about_us.php';
    
    default:
        include('view/quotes_list.php');
        break;
}

include('view/footer.php');

?>

</main>