<?php 

$quoteID = filter_input(INPUT_GET, 'quoteID');
$get_quote = get_quote($quoteID);

?>

<h1>Edit Quote</h1>
    <form action="." method="post" id="submit_form">
        <input type="hidden" name="quoteID" value="<?php echo $get_quote['quoteID']; ?>">
            
        <label>Quote:</label>
        <textarea rows="5" cols="20" name="quote"><?php echo $get_quote['quote']; ?></textarea>
        
        <label>Author:</label>
        <input type="text" name="author" value="<?php echo $get_quote['author']; ?>">
        
        <input type="submit" name="action" value="Update Quote">
    </form>