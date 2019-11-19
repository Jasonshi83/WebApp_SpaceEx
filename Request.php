<?php
header("Content-type: text/plain");

echo $_SERVER["REQUEST_METHOD"]
    . " " . $_SERVER['REQUEST_URI']
    . " " . $_SERVER['SERVER_PROTOCOL']
    . "\n";
$headers = apache_request_headers();
foreach ($headers as $key => $val) {
    echo "$key: $val\n";
}

echo "\n";

$post = file_get_contents("php://input");
echo $post;
echo "\n\n";

echo "---- Response: ----\n";
echo $_SERVER['SERVER_PROTOCOL']
    . " 200 OK\n";
flush();
$headers = apache_response_headers();#headers_list();
foreach ($headers as $key => $val) {
    echo "$key: $val\n";
}
echo "\n";
echo "(and now everything from above)";