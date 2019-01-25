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
        <style src="css/style.css" type="stylesheet"></style>
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
<div id="search">
    <h2>Search</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Search for: 
    <input type="text" name="searchInput" value="<?php echo isset($_POST['searchInput']) ? 
     $_POST['searchInput'] : ''; ?>" />
    <input type="submit" name="submit" value="Go" />
    </form>
</div>


<!-- ========== working with volumes https://developers.google.com/books/docs/v1/using#WorkingVolumes-->
<main>
<?php
    if (!empty($_POST['searchInput'])) {
        // $_POST = "";
    
        // =================== book search results
        echo '<h2>Search results for "', $_POST['searchInput'],'"</h2>';

        $optParams = array('filter' => 'ebooks');
        $results = $service->volumes->listVolumes($_POST['searchInput'], $optParams);
        //============Handling the request, output API data
        
        foreach ($results as $item) {
            echo "<div class='searchResult'>";

            
// Authors
echo "<div class='allBookinfo'>";
echo "<div class='booktext'>";
            
//Non-image div above
// ======== Book title ==============

echo '<b>',$item['volumeInfo']['title'], '</b>',"<br /> \n";

// =========== authors
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

// ==========   Book Info Link
if (!empty($item['volumeInfo']['infoLink'])) {
    echo '<a href="';
    echo $item['volumeInfo']['infoLink'];
    echo '">Learn more about this book!</a> <br />';

}else{
    echo "No Links to further information found</ br> \n</ br> \n";
};   

echo "</div>";
//Non-image div above 
// ======== image

if (!empty($item['volumeInfo']['imageLinks']['smallThumbnail'])) {
    echo '<img src="';
    echo $item['volumeInfo']['imageLinks']['smallThumbnail'];
    echo '"/> <br /> ';
    echo "<br /> \n";

}else{
    echo "No image listed</ br> \n";
};   
echo "</div>"; 
// ======class='allBookinfo'>; //individual book info ends above

// ======== close div below------- class='searchResult'>
    echo "</div>"; 

    }  
        } else {
            //empty search field, no results to return
    }
  ?>

<!-- ====== Loop through 10 list items above, move <li> to external function ===== -->

   <!-- =================== book list results -->
</main>
    </body>

<!-- // =================== Display searched-for console-log query -->


</html>