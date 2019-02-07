<?php
if (!empty($item['volumeInfo']['infoLink'])) {
    echo '<a href="';
    echo $item['volumeInfo']['infoLink'];
    echo '">Learn more about this book!</a> <br />';

}else{
    echo "No Links to further information found</ br> \n</ br> \n";
};   

?>