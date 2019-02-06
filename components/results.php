<?php
class Results{
    public $search = "I'm a class property!";
 
    public function setSearch($newSearch)
    {
        $this->search = $newSearch;
    }
   
    public function getSearch()
    {

if (!empty($_POST['searchInput'])) {
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
            
//========= Non-image div above
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
//=============Non-image div above 
// ======== Book image fxn Below

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
// ==============================================================
    }
}
  ?>