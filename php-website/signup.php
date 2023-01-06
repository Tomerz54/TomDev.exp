<?php
session_start();
    include("connection.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
    }
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            
            mysqli_query($con, $query);

            header("Location: login.php");
			die;
        }
        
        else{
            echo " Please enter some valid information!";
        }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TomDevExp</title>
    <header>
        <a id="Home" href="index.php">Home</a>
        <a id="MyGames" href="MyGames.html">My Games</a>
        <a id="MyContact" href="Contact.html">My Contact</a>
        <a id="SignIn" href="signup.php">Sign In</a>
        <img src="logo.png" alt="Company logo">
      </header>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Quattrocento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento&display=swap" rel="stylesheet">
</head>

<body>
    <footer>
        © 2022 TomDev
    </footer>
    
    <h1 id="MyContactText">Sign In</h1>
    <form method="post">
        <div>
            <label id="Gmail_Box" for="text">Gmail:</label>
            <input id="Gmail_TypeBox" type="text" name="user_name" placeholder="Username:">
        </div>
        
        <div>

            <label id="Password_Box" for="fPassword">Password:</label>
            <input id="Password_TypeBox" type="password" name="password" placeholder="your Password:" >
            
           
        </div>
        
        <br>

        <div>
            <input id="SignInButton" type="submit" value="Signup">
            <a href="login.php">Click to Login</a><br><br>
        </div>
            
    </form>
   
    
    <script src="index.js"></script>
    
</body>
</html>