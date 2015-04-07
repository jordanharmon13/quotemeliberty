<main>    
    <?php 
    // quotes_list page
    
    if($action == 'quotes_list') { ?>
    
    <h1>Quotes</h1>
    <ul class="quote_container">
    <?php
        $quotes = get_quotes(); 

        foreach ($quotes as $quote) { ?>
        <li class="quotes"><a href="?action=<?php echo $quote['quoteID'] ?> "><?php echo $quote['quote']; ?>
            <br><span><?php echo $quote['author']; ?></span>
            <br><span><?php echo date('M j,Y', strtotime($quote['submitDate'])); ?></span></a></li>
       <?php } ?>
    </ul>
       
    <?php } else if($action == 'quote_add') {
        include('view/quote_add.php');
    
    } else if ($action == 'quotes_popular') {
        include('quotes_popular.php');
    
    } else if ($action == 'contact_us') {
       include 'contact/contact.php';
       
    } else if ($action == 'quote_page') {
        include('quote_page.php');
    
    } else {
        require('quote.php');
    }
?>

    
</main>

