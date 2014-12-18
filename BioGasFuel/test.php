
<?php
$string = "This_is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " _");
//ooooooooooooooo
while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
?>

