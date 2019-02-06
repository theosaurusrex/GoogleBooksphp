<?php
// ============ Build Client object 

require( dirname( __FILE__ ) . '/model/client.php' );

//============== Build service object
require( dirname( __FILE__ ) . '/model/service.php' );
?>
 
<!-- ============== Begin HTML, ====================== -->
<?php
require( dirname( __FILE__ ) . '/views/head.php' );
?>
<!-- ============== Begin HTML, BODY ====================== -->
    <body>
        <?php
        require( dirname( __FILE__ ) . '/views/header.php' );
        ?>
        <?php
        require( dirname( __FILE__ ) . '/views/head.php' );
        ?>
<!-- =================== book search field ====================== -->
<!-- ======Single responsibility implementation https://laracasts.com/series/solid-principles-in-php/episodes/1 -->
        <?php
        require( dirname( __FILE__ ) . '/views/searchForm.php' );
        ?>

<!-- ========== Search results =========working with volumes https://developers.google.com/books/docs/v1/using#WorkingVolumes-->
        <main>
            <?php
            require( dirname( __FILE__ ) . '/views/searchResults.php' );
            ?>
        </main>
    </body>
</html>