<div id="search">
    <h2>Search</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Search for: 
        <input type="text" name="searchInput" value="<?php echo isset($_POST['searchInput']) ? 
        $_POST['searchInput'] : ''; ?>" />
        <input type="submit" name="submit" value="Go" />
    </form>
</div>