<?php

require_once (dirname(__FILE__) . '/simplesamlphp/lib/_autoload.php');

$as = new SimpleSAML_Auth_Simple('adfs-sp');

$as->logout(array(
    'ReturnTo' => 'https://phpadfstest.azurewebsites.net/logged_out.php',
    'ReturnStateParam' => 'LogoutState',
    'ReturnStateStage' => 'MyLogoutState',
));
?>