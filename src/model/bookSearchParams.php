<?php
    $optParams = array('filter' => 'ebooks');
    $results = $service->volumes->listVolumes($_POST['searchInput'], $optParams);
?>