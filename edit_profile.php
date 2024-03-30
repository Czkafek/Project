<?php 
    session_start();
    include ('header.html');
    //if (isset($_POST['edytuj_dane'])){header("Refresh:0");}
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
 input[type="file"]{
  display: none;
}
label{
    cursor: pointer;
}

.avatar-buttons input:nth-child(1) {
    background-color: #151515;
    color: #f8f8f8;
    font-weight: 600;
}
.avatar-buttons input:nth-child(2) {
    background-color: #eb8259;
    color: #2d1c07;
    font-weight: 700;
}

.avatar-buttons input {
    background-color: #151515;
    border: none;
    padding: 0.7vw 2vw 0.7vw 2vw;
    text-wrap: nowrap;
    float: right;
}   


        </style>
</head>
<body>

    <!-- <section class="background"></section> -->

    <main>
        <!-- <section class="container avatar-delete pt-0"> -->

        </section>
        <section  class="container main-container pt-0">
            <form action="" method="post">
                <div class="avatar-container">
                    <div class="avatar">
                        <label for="image-input">
                        <img src="<?php echo $_SESSION["userSession"]["Image"];?>" alt="avatar" class="img-fluid avatar-img">
                        <input id="image-input" type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image-input"/>
                        <a><img src="images/image-hover.png" alt="image-hover-icon" class="image-hover-icon"></a>
                        </label>
                    </div>
                    <div class="buttons">
                        <input type="submit" name="edit-image" value="Zmień avatar">
                        <input type="submit" name="delete-image" value="Usuń avatar">
                    </div>
                </div>
                <div class="informations-container">
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
                            Zaimki
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
                            <input type="submit" value="Edytuj">
                        </div>
                    </div>
                    <div class="information">
                        <div class="information-name">
                            <p>Hasło</p>
                        </div>
                        <div class="buttons">
                            <input type="button" value="Zmień hasło">
                        </div>
                    </div>
                    <div class="information">
                        <div class="information-name">
                            <p>Newsletter</p>
                        </div>
                        <div class="buttons" id="newsletter-buttons">
                            <input type="submit" value="Aktywuj" name="active_news">
                            <input type="submit" value="Dezaaktywuj" name="notctive_news">
                        </div>
                    </div>
                </div>
                <div class="zmiany-container">
                    <div class="zmiany-text">
                        <p>Masz niezapisane zmiany</p>
                    </div>
                    <div class="zmiany-buttons">
                        <input type="submit" value="Resetuj">
                        <input type="submit" value="Zapisz zmiany">
                    </div>
                </div>
            </form>
        </section>

    </main>


    <?php
include('database.php');

if (isset($_POST['active_news'])){
    echo "<p class='text-light'> UWU </p>";
    unset($_POST['active_news']);
    $SQL = "SELECT * FROM `Newsletter` WHERE mail='".$_SESSION['userSession']['email']."'";
    echo $SQL;
}






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



</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

<?php 

    include 'footer.html';

?>
