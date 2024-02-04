<?php 
include('header.html');
include_once('database.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="height: 100vh; width: 100vw;">
<div class="container">
<div class="row row-cols-1 row-cols-lg-3 g-4 mx-auto my-5">
  <?php
    for ($i=0; $i<3; $i++){
      $news = $i;
      $news_k = $news+1;
      $query = "SELECT * FROM `News` ORDER BY `DateTime` DESC LIMIT $news,$news_k ;";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($result);
    echo '<div class="col">';
    echo  '<a href="strona_news.php?news='.$i.'" style="text-decoration: none;">';
    echo '<div class="card h-100 border-0">';
    echo'<img src="'.$row['Image'].'" class="card-img-top" alt="...">';
    echo  '<div class="card-body">';
    echo'    <h5 class="card-title">'.$row['Title'].'</h5>';
    echo'    <p class="card-text">'.$row['Short'].'</p>';
    echo '</div>';
    echo  '<div class="card-footer">';
    echo'    <small class="text-body-secondary">'.$row['DateTime'].'</small>';
    echo'  </div>';
    echo'</div>';
    echo'</a>';
    echo'</div>';
    }
  ?>
  <!--
  <div class="col">
    <div class="card h-100 border-0">
      <img src="Images/Tlo2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
-->
</div>


<div class="row row-cols-2 row-cols-md-2 g-4 mx-auto">
  <div class="col">
    <div class="card">
      <img src="Images/pomalowane-na-szaro-gladkie-teksturowane-tlo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="Images/coding-man.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="row sticky-top float-end d-none d-lg-block my-3 w-25">
    <div class="col-12">
        <h3 class="text-light" style="padding: 0%; margin: 0%;">Na czasie</h3>
        <img class="d-inline" src="Images/Line 1.png">
        <form class="form-inline my-2">
        <input class="form-control mr-sm-2" type="email" placeholder="Mail" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zapisz się</button>
    </form>
    </div>
</div>

<div class="card mb-3 my-5 mx-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-4">
      <img src="Images/coding-man.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
<?php
for ($i=0;$i<4;$i++){
echo'<div class="card mb-3 my-3 mx-3" style="max-width: 540px;">';
echo'  <div class="row g-0">';
echo'    <div class="col-4">';
echo'      <img src="Images/coding-man.jpg" class="img-fluid rounded-start" alt="...">';
echo'    </div>';
echo'    <div class="col-8">';
echo'      <div class="card-body">';
echo'        <h5 class="card-title">Card title</h5>';
echo'        <p class="card-text">'.$i.'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
echo'      </div>';
echo'    </div>';
echo'  </div>';
echo'</div>';
}
?>
<!--
<div class="card mb-3 my-3 mx-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-4">
      <img src="Images/coding-man.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
-->

</div>
</body>
</html>

<?php 
include('footer.html');
?>