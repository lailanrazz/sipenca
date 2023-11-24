<?php
$wfsUrl =
file_get_contents("http://localhost:8080/geoserver/diy/wms?service=WFS&version=1.0.0&request=GetFeature&typeName=DIY%3ATEMATIK_JUMLAHKKMISKIN_Proj&maxFeatures=50&outputFormat=application%2Fjson");
header('Content-type: application/json');
echo ($wfsUrl);






