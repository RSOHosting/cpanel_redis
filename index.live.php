<?php
require_once("/usr/local/cpanel/php/cpanel.php");

//Create new cpanel object to integrate.
$cpanel = &new CPANEL();

$stylesheetsAndMetaTags = '
    <link rel="stylesheet" href="style.css" charset="utf-8"/>
';

$cpanelHeader = str_replace('</head>', $stylesheetsAndMetaTags . '</head>', $cpanel->header( "Redis Manager by RSO Hosting" ));
echo $cpanelHeader;

?>

<div class="body-content">
<p class="description">
Redis is an open source (BSD licensed), in-memory data structure store, used as a database, cache and message broker. It supports data structures such as strings, hashes, lists, sets, sorted sets with range queries, bitmaps, hyperloglogs, geospatial indexes with radius queries and streams. 
</p>
<div class="section">
<h2>Redis Status</h2>
<div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</div>
</div>

<?php

print $cpanel->footer();

$cpanel->end();
?> 
