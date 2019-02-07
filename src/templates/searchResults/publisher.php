<?php
                if (!empty($item['volumeInfo']['publisher'])) {
                    echo 'publisher: ',$item['volumeInfo']['publisher'], "<br /> \n";
                    // echo $item['imageLinks']{'Thumbnail'};
                    echo "<br /> \n";
                }else{
                    echo "No publisher listed <br /> \n<br /> \n";
                };
?>