<h1>Popular Quotes</h1>
    <ul class="quote_container">
    <?php
        $quotes = get_quotes(); 
        foreach ($quotes as $quote) { ?>
        <li class="quotes"><a href="?action=<?php echo $quote['quoteID']?>"><?php echo $quote['quote']; ?>
            <br><br><span><?php echo $quote['author']; ?></span></a></li>
       <?php } ?>
    </ul>