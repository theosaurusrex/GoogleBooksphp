<?php
require_once './vendor/autoload.php';
// ============ Build Client object
$client = new Google_Client();
$client->setApplicationName("Google Books PHP");
$client->setDeveloperKey("AIzaSyDJkM-1kKkhl0ohzoBohDxaH5mK9yi4gTg");
//============== Build service object

$service = new Google_Service_Books($client);


// title = $(response.items[i].volumeInfo.title);
// $author = response.items[i].volumeInfo.authors;
// $url = response.items[i].volumeInfo.img;
// $img = response.items[i].volumeInfo.title;
?>
 

<!-- ============== Begin html view -->
<!DOCTYPE= html>
<html lang="en">
    <head>
    </head>
        <meta charset="UTF-8">
        <title>Google Books API Challenge</title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">
    <body>
<header>
    <div>
    <h1>Google Books API in PHP</h1>
    </div>
</header>
<!-- ===================interface for book search using google api -->

<!-- =================== book search field -->

    <h2>Search</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Search for: 
    <input type="text" name="searchInput" value="<?php echo isset($_POST['searchInput']) ? 
     $_POST['searchInput'] : ''; ?>" />
    <input type="submit" name="submit" value="Go" />
    </form>



<!-- ========== working with volumes https://developers.google.com/books/docs/v1/using#WorkingVolumes-->
<?php
    if (!empty($_POST['searchInput'])) {
        // $_POST = "";
    
        // =================== book search results
        echo '<h2>Search results for "', $_POST['searchInput'],'"</h2>';

        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes($_POST['searchInput'], $optParams);
        //============Handling the request, output API data
        
        foreach ($results as $item) {
            echo '<b>',$item['volumeInfo']['title'], '</b>',"<br /> \n";
            
// Authors
        if (!empty($item['volumeInfo']['authors'])) {
            // ========= multiple authors if statement
            echo 'author(s): <br />';
            foreach ($item['volumeInfo']['authors'] as $author)
                    echo "<i>$author </i><br />";
                // echo ', ',$item['volumeInfo']['authors'][2],' ';
                
        }else{
            echo "<i>No author listed</i> <br /> \n";
        };
// Publishers

        if (!empty($item['volumeInfo']['publisher'])) {
            echo 'publisher: ',$item['volumeInfo']['publisher'], "<br /> \n";
            // echo $item['imageLinks']{'Thumbnail'};
            echo "<br /> \n";
        }else{
            echo "No publisher listed <br /> \n<br /> \n";
        };
// ======== image
    if (!empty($item['imageLinks']['small'])) {
        echo 'image: <href="';
        echo $item['imageLinks']['small'];
        echo '"/> <br /> \n';
        // echo $item['imageLinks']{'Thumbnail'};
        echo "<br /> \n";
    }else{
        echo "No image listed <br /> \n<br /> \n";
    };   
            
            
    }  
        } else {
            //empty search field  
    }
  ?>

<!-- ====== Loop through 10 list items above, move <li> to external function ===== -->

   <!-- =================== book list results -->

    </body>

<!-- // =================== Display searched-for console-log query -->


</html>