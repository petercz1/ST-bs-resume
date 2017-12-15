<?php
$path = $_SERVER["SCRIPT_FILENAME"];

file_put_contents("php://stdout", "\nRequested: $path");
error_log('testing', 3, 'logger.log');
echo "<p>Hello World</p>";
