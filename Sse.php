<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Access-Control-Allow-Origin: *');

while (true) {
    $time = date('H:i:s');
    echo "data: Server time: $time\n\n";
    ob_flush();
    flush();
    sleep(3); // send every 3 seconds
}
?>