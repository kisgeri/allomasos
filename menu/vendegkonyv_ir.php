<?php

$fajlnev = "vendegkonyv_szavazas.txt";
if(!file_exists($fajlnev))
{
    $fp = fopen( $fajlnev, "w" );
    fwrite( $fp, " ; " );
    fclose($fp);
}


$fp = fopen($fajlnev, "r");
$sz = fread( $fp, filesize($fajlnev) );
fclose( $fp );



//$_SESSION['bekuldve'] = 1
?>