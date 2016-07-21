<?php
require_once 'config.php';

$server = stream_socket_client("{$protocol}://{$server_ip}:{$port}", $ErrNo, $ErrStr );
fwrite($server, "Hello server\n");