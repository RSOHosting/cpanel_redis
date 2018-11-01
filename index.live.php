<?php
require_once("/usr/local/cpanel/php/cpanel.php");

//Create new cpanel object to integrate.
$cpanel = &new CPANEL();

print $cpanel->header( "Redis Manager by RSO Hosting" );      // Add the header.

?>

<div class="body-content">
<p class="description">
Redis is an open source (BSD licensed), in-memory data structure store, used as a database, cache and message broker. It supports data structures such as strings, hashes, lists, sets, sorted sets with range queries, bitmaps, hyperloglogs, geospatial indexes with radius queries and streams. 
</p>
<div class="section">
<h2>Redis Status</h2>
</div>
</div>

<?php

print $cpanel->footer();

$cpanel->end();
?> 
