<?php
header('content-type: image/svg+xml');
$duration=300;
$etag=md5(__FILE__.round(time()/$duration));
$ifNoneMatch=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);
header("Etag: ".$etag);
if ($ifNoneMatch == $etag){header("HTTP/1.1 304 Not Modified");}
header("Cache-Control: max-age=900");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+900)." GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s",time()-36000)." GMT");

$type = isset($_GET['type']) ? $_GET['type'] : 'marker';

if (!in_array($type, ['marker', 'cluster'])) {
    throw new Exception('Invalid type.');
}

include_once $type . '.php';
