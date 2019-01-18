<?php

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

<form action="/action_page.php" >
Author: <input type="text" name="Author" value="Author"><br>
Book Title: <input type="text" name="Book Title" value="Book Title"><br>
<input type="submit" value="Submit">
</form>

<!-- ===================loop through "book Searcher results function " -->

<!-- =================== book search results -->
<div id="search-results-header">
    <h2><u>Search results</u></h2>
</div>
<ol>
<!-- ====== Loop through 10 list items here, move <li> to external function ===== -->
    <?php 
    for ($x = 0; $x <= 10; $x++) {
       echo "<li><h3>loop function works</h3></li>";
    } 
    ?>
    <li>
        <?php echo "<img class='bookImage' src=$bookImage alt=$bookImageAlt>" ?>

        <table class="bookinfo">
            <tr>
                <th>
                <?php echo "Info: $bookAndAuthor"; ?>
                </th>
            </tr>
            <tr>
                <td>
                <?php echo "Author: $AuthorFullName  <br>"; ?>
                </td>
            </tr>
            <tr>
                <td>
                <?php echo "Book: $bookName <br>"; ?>
                </td>
            </tr>
            <tr>
                <td>
                <?php echo "Publisher: $publisher <br>"; ?>
                </td>
            </tr>
        
            
        </table>
    </li>
    // end of list item function
</ol>
<!-- =================== book list results -->

    </body>
</html>