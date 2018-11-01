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
<label class='toggle-label'>
 <input type='checkbox'/>
	 <span class='back'>
		<span class='toggle'></span>
 		<span class='label on'>ON</span>
		<span class='label off'>OFF</span>  
	</span>
</label>
</div>
</div>

<?php

print $cpanel->footer();

$cpanel->end();
?> 
