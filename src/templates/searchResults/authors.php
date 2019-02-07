<?php
if (!empty($item['volumeInfo']['authors'])) {
    // ========= multiple authors if statement
    echo 'author(s): <br />';
    foreach ($item['volumeInfo']['authors'] as $author)
        echo "<i>$author </i><br />";
        // echo ', ',$item['volumeInfo']['authors'][2],' ';
    }else{
        echo "<i>No author listed</i> <br /> \n";
    };
?>