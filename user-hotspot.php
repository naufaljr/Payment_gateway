<?php

require('conn.php');

$pelanggan = $API->comm('/ip/hotspot/user/print');
$json = json_encode($pelanggan);

echo $json;
// menampilkan name user hotspot
//foreach ($result as $data) {
//    echo $data['name']. '<br>';
//}
$API->disconnect();
