<?php 

$quoteID = filter_input(INPUT_POST, 'quoteID');
$quote = filter_input(INPUT_POST, 'quote');
$author = filter_input(INPUT_POST, 'author');

edit_quote($quoteID, $quote, $author);
        
?>

<p>Your quote was updated.</p>
<p><?php 
echo $quote; 
?></p>

<p><?php 
echo $author;
?></p>
