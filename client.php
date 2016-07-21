<?php
require_once 'config.php';
$name = $argv[1];

$server = stream_socket_client("{$protocol}://{$server_ip}:{$port}", $ErrNo, $ErrStr );
fwrite($server, "how\n");
fwrite($server, "{$name}\n");
$response_server = stream_get_line($server, 1000, "\n");
echo $response_server."\n";