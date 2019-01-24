<?php
require_once './vendor/autoload.php';
// ============ Build Client object
$client = new Google_Client();
$client->setApplicationName("Google Books PHP");
$client->setDeveloperKey("AIzaSyDJkM-1kKkhl0ohzoBohDxaH5mK9yi4gTg");
//============== Build service object

$service = new Google_Service_Books($client);
  
// =============  Google API key
// $api_key ="AIzaSyDJkM-1kKkhl0ohzoBohDxaH5mK9yi4gTg";

// require composer libraries
// require_once '/path/to/your-project/vendor/autoload.php';

// =========== require pagination token

// $token = $results->getNextPageToken();
// $server->listActivities('me', 'public', array('pageToken' => $token));




// Book text variables 
$firstName = 'Matthew' ;
$lastName ='Taylor';
$bookName = 'Book';
$publisher = "Penguin";

$AuthorFullName = "$firstName $lastName";
$bookAndAuthor = "$bookName by $AuthorFullName";

// Book image variables
$bookImage="https://i0.wp.com/www.theohoward.com/wp-content/uploads/2018/10/web-bjj-custom-art-illustrations-3.jpg?fit=1000%2C787"; 
$bookImageAlt="Poster and Thales rolling during higher belt class";
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
<!-- 
<form action="/action_page.php" >
Author: <input type="text" name="Author" value="Author"><br>
Book Title: <input type="text" name="Book Title" value="Book Title"><br>
<input type="submit" value="Submit">
</form> -->

    <h2>Search</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Search for: 
    <input type="text" name="q" value="<?php echo isset($_POST['q']) ? 
     $_POST['q'] : ''; ?>" />
    <input type="submit" name="submit" value="Go" />
    </form>
<!-- ===================loop through "book Searcher results function " -->

    <h2>Search results for '<?php echo $_POST['q']; ?>'</h2>
    <div>
<!-- =================== book search results -->
 <div id="search-results-header">
    <h2><u>Search results</u></h2>
</div>
<?php
//============EXAMPLE: Calling an API


$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes($_POST['q'], $optParams);
//============EXAMPLE: Handling the request

foreach ($results as $item) {
    echo $item['volumeInfo']['title'], "<br /> \n";
    
  }  
?>

<!-- ====== Loop through 10 list items above, move <li> to external function ===== -->
<!-- ====== Google books example output function below -->
    
        <?php
function bookInfoTable($bookAndAuthor,$AuthorFullName,$bookName){
            echo '<table class="bookinfo"><tr><th>';
            echo "<h3>Results Of Call 1:</h3>";
            foreach ($results['response-thoreau'] as $item) {
            echo $item['volumeInfo']['title'], "<br /> \n";
            }
            echo "<h3>Results Of Call 2:</h3>";
            foreach ($results['response-shaw'] as $item) {
            echo $item['volumeInfo']['title'], "<br /> \n";
            }

                // <?php echo "<img class='bookImage' src=$bookImage alt=$bookImageAlt>" 
        };
        // bookInfoTable();
        ?>

    
   <!-- =================== book list results -->

    </body>
</html>