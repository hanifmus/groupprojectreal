<?php
session_start();

require 'config.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new Dbh();
    $stmt = $conn->connect()->prepare("SELECT * from user WHERE username = :username");
    $stmt->bindparam(":username", $username);
    $stmt->execute();
    if($stmt->rowcount() > 0){
        $user = $stmt->fetch();
        if(password_verify($password, $user['password'])){
            $_SESSION['username'] = $user['username'];
            $_SESSION['password'] = $user['password'];
            header("location: CustomerPAge.html");
        }
        else
            echo '<script>alert("wrong password or username")</script>';

    }else{
        echo '<script>alert("wrong password or username")</script>';
    }
}

if(isset($_POST['submit2'])){
    $name = $_POST['usernamer'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $passwordr = $_POST['passwordr'];
    $conn->query("SELECT * from user WHERE username = '$name';");
    if(mysqli_affected_rows($conn) > 0){
        echo "username already exist";
    }else{
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $conn->query("INSERT INTO user VALUES('$name', '$phonenumber', '$email', '$hashedpassword');");
    }
}
?>

<?php


  session_start();


  require_once 'config.php';
    if(isset($_POST['submit'])){
        $name = $_POST['usernamer'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $passwordr = $_POST['passwordr'];
        $conn = new Dbh();
        $stmt = $conn->connect()->prepare("SELECT * from custorder WHERE roomno = :roomno");
        $stmt->bindparam(":roomno",$roomno);
        $stmt->execute();
        if($stmt->rowcount() > 0){
            echo "The room is already been booked";
        }else{
            
            $stmt = $conn->insert()->prepare("INSERT INTO custorder (roomno, fullname, email, checkin, checkout, adultqty, childqty, request) VALUES(?,?,?,?,?,?,?,?)")->execute([$roomno, $fullname, $email, $checkin, $checkout, $adultqty, $childqty, $request]);
            
            header("location: adindex.html");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>

        <form action="#"  class="search-bar" method="post">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>

    </header>

        <div class="background"></div>

        <div class="container">
            <div class="content">
                <h3 class="logo">ATLANTIC</h3>


                <div class="text-sci">
                    <h2>Welcome! <br> <span>To Our Staff </span> </h2>

                    <p> Welcome back, staff members! Please enter your credentials to access the login page and continue your productive journey</p>

                    <div class="social-icon">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
               
            <div class="logreg-box">
                <div class="form-box login">
                    <form action="#" method="post">
                        <h2>Sign In</h2>

                    <div class="Input-box">
                        <span class="icon"><i class='bx bx-envelope'></i></span>
                        <input type="text" name="username" placeholder="username">
                        <label>Username</label>
                    </div>  

                    <div class="Input-box">
                        <span class="icon"><i class='bx bx-lock-alt' ></i></span>
                        <input type="password" name="password" placeholder="password">
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                        <a href="#">Forgot Password</a>
                    </div>

                    <button type="submit" class="btn" value="submit" name="submit">Sign In</button>

                    <div class="login-register">
                        <p>Don't have any account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>

                    </form>
                </div>

                <div class="form-box register">
                    <form action="#" method="post">
                        <h2>Sign Up</h2>

                    <div class="Input-box">
                        <span class="icon"><i class='bx bx-user-circle' ></i></i></span>
                        <input type="text" name="usernamer" placeholder="usernamer">
                         <label>Username</label>
                    </div>  

                    <div class="Input-box">
                        <span class="icon"><i class='bx bx-user-circle' ></i></i></span>
                        <input type="text" name="phonenumber" placeholder="phonenumber">
                         <label>Phone Number</label>
                    </div>  


                    <div class="Input-box">
                        <span class="icon"><i class='bx bx-envelope'></i></span>
                        <input type="email" name="email" placeholder="email">
                        <label>Email</label>
                    </div>  

                    <div class="Input-box">
                        <span class="icon"><i class='bx bx-lock-alt' ></i></span>
                        <input type="password" name="passwordr" placeholder="passwordr">
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox"> I agree to the terms and conditions
                        </label>
                    </div>

                    <button type="submit" class="btn" value="submit" name="submit2" >Sign In</button>

                    <div class="login-register">
                        <p>Already have an account <a href="#" class="login-link">Sign In</a></p>
                    </div>

                    </form>
                </div>
            </div>
        </div>

    <script src="assets/js/javascript.js"></script>
</body>
</html>