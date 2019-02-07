<?php
class SearchInput {
    
    public $search;


    public function __construct($searchInput) {
        $this->$search = $searchInput;
        // =====import $_POST
        // =====request from google
    }

    public function display() {
        echo $this->search;
        // =====update view
    }
}
?>
<?php
$_POST = new SearchInput($_POST['searchInput']);
$_POST->display();
?> 

<input type="text" name="searchInput" value="<?php echo isset($_POST['searchInput']) 
// $_POST['searchInput'] : ''; ?>" />
<input type="submit" name="submit" value="Go" />
