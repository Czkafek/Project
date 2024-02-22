<?php 
    session_start();
    include_once "header.html";
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
                <label for="InputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control bg-dark text-light" id="InputEmail" aria-describedby="emailHelp" required name="mail">
                <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control bg-dark text-light" id="InputPassword" required name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Log in</button>
        </form>
        <a href="register.php">
            Not have acounnt?
        </a>
        </div>
        </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</html>
<?php 
    include_once "footer.html";
?>
<?php 

    include('database.php');

    if(isset($_POST['submit'])) {
        if(isset($_POST['mail']) && isset($_POST['password'])) {

        }
        else {
            echo"You didn't enter a username/email or password";
        }
    }

?>