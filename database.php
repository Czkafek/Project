<?php
$db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "ByteHouse";
    try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        }
    catch(mysqli_sql_exception){
            echo "Could not connect!";
        }

    function get_news($number){
        $news = $number;
        $news_k = $news+1;
        global $conn;  
        $query = "SELECT * FROM `News` ORDER BY `DateTime` DESC LIMIT $news,$news_k ;";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    };
    
    function ilosc_wierszy(){
        global $conn;
        $query = "SELECT COUNT(*) FROM News;";
        $result = mysqli_query($conn,$query);
        $wynik = mysqli_fetch_row($result);
        return $wynik[0];
    };