<?php   
    session_start();
    echo "<html>";

    $myLogin = $_SESSION ["myLogin"];
    echo "Value of myLogin has been retreived: ".$myLogin."\n";

    $myColor = $_SESSION ["myColor"];
    echo "Value of MyColor has been retreived: ".$myColor."\n";

    echo "<html>\n";

?>