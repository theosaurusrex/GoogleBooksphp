<?php

$firstName = 'Matthew' ;
$lastName ='Taylor';
$bookName = 'Book';
$AuthorFullName = "$firstName $lastName";
$bookAndAuthor = "$bookName by $AuthorFullName";

?>

<!DOCTYPE= html>
<html lang="en">
    <head>
    </head>
        <meta charset="UTF-8">
        <title>Google Books API Challenge</title>
        <link rel="stylesheet" href="" type="text/css">
    <body>
<header>
    <div>
    <h1>Google Books API in PHP</h1>
    </div>
</header>
<!-- ===================interface for book search using google api -->

<!-- =================== book search field -->

<!-- =================== book search submit button -->

<form action="/action_page.php">
Author: <input type="text" name="Author" value="Author"><br>
Book Title: <input type="text" name="Book Title" value="Book Title"><br>
<input type="submit" value="Submit">
</form>
<!-- =================== book search results -->
<div>
    <h2><u>Search results</u></h2>
    <table>
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
        
    </table>
</div>
<!-- =================== book list results -->

    </body>
</html>