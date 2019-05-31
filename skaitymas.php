<?php

$data = file_get_contents('937215.jpg');

header("Content-Type: image/jpeg");
header("Content-Length: " .strlen($data));
echo $data;