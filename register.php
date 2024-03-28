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
        <h3 class="text-light pt-5">Registration</h3>
        <form class="text-light" method="post">
            <div class="form-group col-lg-12 m-3">
                <label>Username</label>
                <input type="label" name="username" class="form-control bg-dark text-light" id="" value="" required minlength="5" maxlength="20">
            </div>

            <div class="form-group col-lg-6 m-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control bg-dark text-light" id="" value="" required minlength="5" maxlength="20">
            </div>


            <div class="form-group col-lg-6 m-3">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control bg-dark text-light" id="" value="" required>
            </div>
       

            <div class="col-sm-6 m-3">
                <input type="checkbox" class="checkbox" name="news"/>Sigh up for our newsletter
            </div>           

            <button type="submit" class="btn btn-primary m-3" name="submit" value="submit">Register</button>
        </form>
        <a href="login.php">
            Already have acounnt?
        </a>
        <?php 

            include('database.php');

             if( isset($_POST['submit']) ) {

                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

                if(empty($username)) {
                    echo"Please enter a username";
                }
                elseif (empty($password)) {
                    echo"Please enter a password";
                }
                else {
                    
                    $sql = "INSERT INTO user_db (username, email, password) VALUES ('$username', '$email','$password')";
                    try {
                        mysqli_query($conn, $sql);
                        echo"User has been registered succesfully";
                    }
                    catch(mysqli_sql_exception) {

                        $query = "SELECT username FROM user_db WHERE username='$username'";
                        $result = $conn->query($query);

                        if($result->num_rows == 1) {
                            echo"Username already taken";
                        }
                        else {
                            echo"Email already used, try to log in!";
                        }
                    }

                }

             }

        ?>
        </main>
</body>
</html>
<?php 
    include_once "footer.html";
?>