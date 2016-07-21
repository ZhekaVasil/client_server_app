<?php
require_once 'config.php';
$server = stream_socket_server("{$protocol}://{$server_ip}:{$port}", $ErrNo, $ErrStr);
while($client = stream_socket_accept($server, -1))
{
    echo "New client\n";
}