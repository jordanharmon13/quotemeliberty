<?php

$quote = get_quote($action);?>

<div>
    <h1><?php echo $quote['author']; ?></h1>
    <span>
        <p><?php echo $quote['quote']; ?></p>
    </span>
    <a href=".?action=quote_edit&quoteID=<?php echo $action ?>">Edit Quote</a>
    <a href=".?action=quote_delete&quoteID=<?php echo $action ?>">Delete Quote</a>

</div>