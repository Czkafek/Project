<?php 

    include 'header.html';
    include 'databse.php';
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="edit_profile.css">

    <style>
        .information-status textarea{
    resize: none;
    background-color: #111111;
    border: none;
    color: #f8f8f8;
    outline: none;
    padding: 0.5vw 1vw 0.5vw 1vw;
    width: 100%;
}
        </style>
</head>
<body>
<main>

<section  class="container main-container py-4 my-5">
    <div class="avatar-container">
        <div class="avatar">
            <img src="<?php echo $_SESSION["userSession"]["Image"];?>" alt="avatar" class="img-fluid avatar-img">
            <a><img src="images/image-hover.png" alt="image-hover-icon" class="image-hover-icon"></a>
        </div>
        <div class="avatar-buttons">
            <button>Zmień avatar</button>
            <button>Usuń avatar</button>
        </div>
    </div>
    <div class="informations-container mb-5">
        <form method="post">
        <div class="information">
            <div class="information-name">
                Nazwa Użytkownika
            </div>
            <div class="information-status">
            <input type="text" class="form-control bg-dark text-light border-0" style="background-color: #111111 !important;" rows="1" maxlength="25" minlength="1" id="email-status" name="username" value="<?php echo $_SESSION["userSession"]["username"];?>">
            </div>
            </div>
        <div class="information">
            <div class="information-name">
                Zaimek
            </div>
            <div class="information-status">
            <input type="text" class="form-control bg-dark text-light border-0" style="background-color: #111111 !important;" rows="1" maxlength="25" minlength="1" id="email-status" name="pronoun" value="<?php echo $_SESSION["userSession"]["pronoun"];?>">
            </div>
        </div>
        <div class="information">
            <div class="information-name">
                Twój tytuł
            </div>
            <div class="information-status">
            <input type="text" class="form-control bg-dark text-light border-0" style="background-color: #111111 !important;" rows="1" maxlength="25" minlength="1" id="email-status" name="title" value="<?php echo $_SESSION["userSession"]["title"];?>">
            </div>
        </div>
        <div class="information">
            <div class="information-name">
                Email
            </div>
            <div class="information-status">
                <div class="information-email">
                    <input type="text" class="form-control bg-dark text-light border-0" style="background-color: #111111 !important;" rows="1" maxlength="25" minlength="1" id="email-status" name="email" value="<?php echo $_SESSION["userSession"]["email"];?>">
                </div>
                <input type="submit" value="Edytuj" class="btn btn-secondary" name="edytuj_dane">
            </div>
        </div>
        </form>
    </div>
</section>
<?php

if (isset($_POST["edytuj_dane"])){
    echo $_POST['username'];
    ?>

    <?php
}


?>
</main>
</body>
</html>



<?php 

    include 'footer.html';

?>
