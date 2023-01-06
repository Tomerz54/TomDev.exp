<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
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
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@1,100&display=swap" rel="stylesheet">
</head>

<body>
    <footer>
        © 2022 TomDev
    </footer>
    <a href="logout.php">Logout</a>
    <h1 id="MyWebsiteText">This is my website!</h1>
    
    <br>
	<h1 id="my_customer">Hello, <?php echo $user_data['user_name']; ?></h1>

    <p id="introduction">Student/Gamedev/Programmer.</p>
    <button id="AboutMe" onclick="scrollToElement('p1')">Learn More.</button>
    <section>
        <header
         id="AboutMeText">Hi!<h4 id="p1" class="my_descripton" >My name is Tomer zangi im 15 years old<bR> and im learning to code and create <br>in order to become a software engineer in the future   </h4>
         <a id="MyGames" href="MyGames.html">My Games</a></header>
        </section>
        <button id="Home_Load" onclick="window.location.href='index.php'">Home</button>    
        <button id="Games_Load" onclick="window.location.href='MyGames.html'">Games</button>
        <button id="Contact_Load" onclick="window.location.href='Contact.html'">Contact</button>
        <button id="Sign_In_Load" onclick="window.location.href='signup.php'">Sign In</button>
    
    <script src="index.js"></script>
    
</body>
</html>