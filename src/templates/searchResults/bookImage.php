<?php
    if (!empty($item['volumeInfo']['imageLinks']['smallThumbnail'])) {
        echo '<img src="';
        echo $item['volumeInfo']['imageLinks']['smallThumbnail'];
        echo '"/> <br /> ';
        echo "<br /> \n";

    }else{
        echo "No image listed</ br> \n";
    };   
    echo "</div>"; 
?>