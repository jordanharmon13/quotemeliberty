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
       
    <?php } else {
        require('quote.php');
    }
?>

