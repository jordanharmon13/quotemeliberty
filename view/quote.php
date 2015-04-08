<?php

$quote = get_quote($action);?>

<div>
    <h1><?php echo $quote['author']; ?></h1>
    <span>
        <p><?php echo $quote['quote']; ?></p>
    </span>
</div>