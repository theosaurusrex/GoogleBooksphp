<?php
// ============ Build Client object 

require( dirname( __FILE__ ) . '/model/client.php' );

//============== Build service object
require( dirname( __FILE__ ) . '/model/service.php' );
?>
 
<!-- ============== Begin HTML, ====================== -->
<?php
require( dirname( __FILE__ ) . '/templates/head.php' );
?>
<!-- ============== Begin HTML, BODY ====================== -->
    <body>
        <?php
        require( dirname( __FILE__ ) . '/templates/header.php' );
        ?>
<!-- =================== book search field ====================== -->
        <?php
        require( dirname( __FILE__ ) . '/templates/searchForm.php' );
        ?>

<!-- ========== Search results =========working with volumes https://developers.google.com/books/docs/v1/using#WorkingVolumes-->
        <main>
            <?php
            require( dirname( __FILE__ ) . '/templates/searchResults.php' );
            ?>
        </main>
    </body>
</html>