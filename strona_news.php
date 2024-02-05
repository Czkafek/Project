<?php
    include_once('database.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $news = $_GET['news'];
    $news_k = $news+1;
    $query = "SELECT * FROM `News` ORDER BY `DateTime` DESC LIMIT $news,$news_k ;";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    echo $row['Title'].'<br>';
    echo $row['Content'];


    // echo $_GET['news'].'<br>';
    // echo time().'<br>';
    // $data = New DateTime();
    // var_dump($data);
    // echo $data->format('m/d/Y');

    ?>
</body>
</html>

