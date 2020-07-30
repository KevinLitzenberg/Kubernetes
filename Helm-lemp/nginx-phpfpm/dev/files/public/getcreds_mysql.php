<?php
# array of environment variables to retrieve from container.
$mysql_creds = array(
    "MYSQL_ROOT_PASSWORD" => "",
    "MYSQL_PASSWORD" => "",
    "MYSQL_USER" => "",
    "MYSQL_DATABASE" => "" 
);

# populate mysql_creds with environment variables.
foreach ($mysql_creds as $key => $value) {
    $value = getenv($key);
    echo "$key : $value \n";
}
