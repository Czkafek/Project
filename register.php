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
        <h3 class="text-light">Registration</h3>
        <form class="text-light" method="post">
            <div class="form-group col-lg-12 m-3">
                <label>Username</label>
                <input type="label" name="username" class="form-control" id="" value="" required minlength="5" maxlength="20">
            </div>

            <div class="form-group col-lg-6 m-3">
                <label>Password</label>
                <input type="password" name="" class="form-control" id="" value="" required minlength="5" maxlength="20">
            </div>

            <div class="form-group col-lg-6 m-3">
                <label>Repeat Password</label>
                <input type="password" name="" class="form-control" id="" value="" required minlength="5" maxlength="20">
            </div>

            <div class="form-group col-lg-6 m-3">
                <label>Email Address</label>
                <input type="email" name="" class="form-control" id="" value="" required>
            </div>

            <div class="form-group col-lg-6 m-3">
                <label>Repeat Email Address</label>
                <input type="email" name="" class="form-control" id="" value="" required>
            </div>          

            <div class="col-sm-6 m-3">
                <input type="checkbox" class="checkbox" name="news"/>Sigh up for our newsletter
            </div>           

            <button type="submit" class="btn btn-primary m-3">Register</button>
        </form>
        <a href="login.php">
            Already have acounnt?
        </a>
        </main>
</body>
</html>
<?php 
include_once "footer.html";
?>