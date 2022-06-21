<?php   
    session_start();
    echo "<html>";

    $queryString = $_SERVER["QUERY_STRING"];
    echo "Query string of the incoming URL: "$queryString."\n';

    echo "Cookies receieved:\n";
    foreach ($_COOKIE as $name => $value) {
            echo " $name = $value\n";
    }
        
    $myLogin = $_SESSION ["myLogin"];
    echo "Value of myLogin has been retreived: ".$myLogin."\n";

    $myColor = $_SESSION ["myColor"];
    echo "Value of MyColor has been retreived: ".$myColor."\n";

    echo "<html>\n";

?>