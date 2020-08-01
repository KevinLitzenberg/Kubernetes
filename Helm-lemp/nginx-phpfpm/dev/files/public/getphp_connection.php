<?php
    
    #$mysql_creds = array();

    #include("getphp_connection.php");

    function getcreds_mysql(){
        # array of environment variables to retrieve from container.
        $mysql_creds = array(
            "MYSQL_ROOT_PASSWORD" => "",
            "MYSQL_PASSWORD" => "",
            "MYSQL_USER" => "",
            "MYSQL_DATABASE" => ""
        );

        # populate mysql_creds with environment variables.
        foreach ($mysql_creds as $key => $value) {
            #$value = getenv($_SERVER[$key]);
            $value = (echo $_SERVER[$key];);
            echo "$key:$value \n";
            $mysql_creds[$key] = $value;
        }
        print_array($mysql_creds);        
        return $mysql_creds;
    }

    function print_array($some_array) {
        foreach ($some_array as $key => $value) {
	    echo "$key:$value \n";
        }

    }


    function get_creds(){
        $creds = parse_ini_file('../php_sql_config.ini');
        return $creds;
    }

    function get_sqli_connect($creds){
        if(!isset($connection)){
            #$connection = mysqli_connect($creds['servername'], $creds['username'], $creds['password'], $creds['dbname']);
            $connection = mysqli_connect("mysql-facingsf", $creds['MYSQL_USER'], $creds['MYSQL_PASSWORD'], $creds['MYSQL_DATABASE']);
        }
        if($connection === false){
            echo "returning FALSE!\n\n\n";
            return mysqli_connect_error();
        }
        #echo "connection: $connection \n";
        return $connection;
    }


//Get credentials
                     #$config = get_creds();
                     $config = getcreds_mysql();
                     print_array($config);

                     //Connect and select db 
                     $link = get_sqli_connect($config);
                     #$link = mysqli_connect('K8_phpfpm_service_name', 'sql_user', 'sql_user_password', 'db_to_connect');

                     //Run a queryi 
                     $resultSF = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'San Francisco, CA' AND YEAR(`ImageDate`)= '2012' AND `Notes` = 'splash' AND `Notes` != 'SIGNS and NOTES' ORDER BY `ImageDate` DESC LIMIT 3");

                     //Photo1
                     $row = mysqli_fetch_row($resultSF);
                     echo "<img id=\"photo1\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";

                     //Photo2
                     $row = mysqli_fetch_row($resultSF);
                     echo "<img id=\"photo2\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";

                     //Photo3
                     $row = mysqli_fetch_row($resultSF);
                     echo "<img id=\"photo3\"  src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";

                     //php7.0 free the result
                     mysqli_free_result($resultSF);
                     mysqli_close($link);

?>
