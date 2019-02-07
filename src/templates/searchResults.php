<?php
    if (!empty($_POST['searchInput'])) {
        // =================== book search results
        echo '<h2>Search results for "', $_POST['searchInput'],'"</h2>';
        
        // require( dirname( __FILE__ ) . '../model/bookSearchParams.php' );
        
        $optParams = array('filter' => 'ebooks');
        $results = $service->volumes->listVolumes($_POST['searchInput'], $optParams);
        
        //============Handling the request, output API data
        
        foreach ($results as $item) {
            echo "<div class='searchResult'>";
            echo "<div class='allBookinfo'>";
            echo "<div class='booktext'>";
            // ======== Book title ==============
            
            require( dirname( __FILE__ ) . '/searchResults/title.php' );
            
            // =========== authors
            require( dirname( __FILE__ ) . '/searchResults/authors.php' );

            // Publishers
            require( dirname( __FILE__ ) . '/searchResults/publisher.php' );

                // ==========   Book Info Link
            require( dirname( __FILE__ ) . '/searchResults/bookInfoLink.php' );
            echo "</div>";

// ======== Book image fxn Below

            require( dirname( __FILE__ ) . '/searchResults/bookImage.php' );

            echo "</div>"; 
                    }  
        } else {
            //empty search field, no results to return
    }
  ?>