<?php
require_once '_connec.php';

// Generate the web page
require __DIR__.'/src/models/friend-model.php';

// Fetching all recipes
$friends = getAllFriends();

// Generate the web page
require __DIR__.'/src/views/indexFriends.php';
?>
