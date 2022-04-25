<?php
$serverName = "DESKTOP-24RR3JB"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Rate My Campus");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( !$conn ) {
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));

if(isset($_POST['submit'],$_POST['rating'])) {
    $comment = $_POST['comment'];
    $rating  = $_POST['rating'];
    $query = "INSERT INTO `RATING`(`Ratings`,`Comment`) VALUES ('$comment', '$rating')";
    if (!sqlsrv_connect($conn,$query)) {
        echo ("Failed"); 
    }else
    {
        echo ("success"); 
    }
}}