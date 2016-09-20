<?php
$client = new Yar_Client("http://passport.msblog.local/server.php");
$result = $client->login();
echo $result;exit;