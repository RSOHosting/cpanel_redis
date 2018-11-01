<?php
require_once("/usr/local/cpanel/php/cpanel.php");
// Create new cpanel object to integrate.
$cpanel = &new CPANEL();

$res = $cpanel->api1('Branding', 'include', array('stdheader.html') );
print $res['cpanelresult']['data']['result'];
?>
<div class="body-content">
Hello World!
</div>
<?php
$res = $cpanel->api1('Branding', 'include', array('stdfooter.html') );
print $res['cpanelresult']['data']['result'];
$cpanel->end();

