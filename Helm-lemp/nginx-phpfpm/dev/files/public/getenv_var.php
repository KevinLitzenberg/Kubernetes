<?php
// Example use of getenv()
$passd = getenv('MYSQL_ROOT_PASSWORD');
echo 'getenv standard: ' .$passd .PHP_EOL;



$script_name = getenv('SCRIPT_FILENAME');
echo 'getenv script: ' .$script_name

?>

