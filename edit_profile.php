<?php 
    session_start();
    include ('header.html');
    if (isset($_POST['edytuj_dane'])){header("Refresh:0");}
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
                    <input type="email" class="form-control bg-dark text-light border-0" style="background-color: #111111 !important;" rows="1" maxlength="25" minlength="1" id="email-status" name="email" value="<?php echo $_SESSION["userSession"]["email"];?>">
                </div>
                <input type="submit" value="Edytuj" class="btn btn-secondary" name="edytuj_dane">
            </div>
        </div>
        </form>
    </div>

<?php
include('database.php');

if (isset($_POST["edytuj_dane"])){
    if ($_POST['username'] != $_SESSION['userSession']['username']){
        $query = "SELECT `username` FROM `user_db` WHERE username='{$_POST['username']}' ;";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0){
        //echo $result;
        ?>
            <div class="alert alert-danger alert-dismissible fade show bg-danger border-danger" role="alert">
                <strong>Holy guacamole!</strong> That Username is already taken!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        else{
            $query = "UPDATE `user_db` SET `username`='{$_POST['username']}' WHERE `username`='{$_SESSION['userSession']['username']}' ;";
            mysqli_query($conn,$query);
            $_SESSION['userSession']['username'] = $_POST['username'];
        }
    }
    $_SESSION['userSession']['pronoun'] = $_POST['pronoun'];
    $_SESSION['userSession']['title'] = $_POST['title'];
    $query = "UPDATE `user_db` SET `pronoun`='{$_POST['pronoun']}', `title`='{$_POST['title']}' WHERE `username`='{$_SESSION['userSession']['username']}' ;";
    mysqli_query($conn,$query);
}


?>
</section>

</main>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

<?php 

    include 'footer.html';

?>
