<?php 
    session_start();
    include_once "header.html";
    if (!empty($_SESSION['userSession'])){
        header("location: profil.php");
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #111111;
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>
<body>
        <main style="min-height: 80%;">
        <div class="container w-50">
        <form class="text-light" method="post">
            <h1 class="text-center m-4">Login Page</h1>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address or Username</label>
                <input class="form-control bg-dark text-light" id="InputEmail" aria-describedby="emailHelp" required name="mail" minlength="3">
                <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control bg-dark text-light" id="InputPassword" required name="password">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Log in">
        </form>
        <a href="register.php">
            Not have acounnt?
        </a>
        <?php 
            //echo "UWU";
            include('database.php');

            if(isset($_POST['submit'])) {
                
                $mail_name = $_POST['mail'];
                $password = $_POST['password'];

                $query = "SELECT username,email FROM user_db WHERE (username='Tapik' OR email='$mail_name') AND (password='$password')";
                $result = $conn->query($query);
                //echo "UU";
                if($result->num_rows == 1) {
                    // login success
                    $dane = mysqli_fetch_assoc($result);
                    $_SESSION["userSession"] = $dane;
                    header("location: profil.php");
                }
                else {
                    // login failed
                    echo"Wrong email/username or password";
                }

                //$conn->close();

            }
            //echo "UWU";
        ?>
        </div>
        </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</html>
<?php 
    include_once "footer.html";
?>