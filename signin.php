
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>X-Pense App</title>
</head>

<body>
    <header class="header">

        <div class="images">
            <img src="assets/images/xpenseLogo.png" class="logo" alt="X-Pense App">
        </div>

        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="layout.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

    </header>


    <main class="container">

            <!-- Write your code here -->
            <section class="form-wrapper-2">
                <h4 class="form-info"> kindly Login to access your account</h4>
                <div class="form-div">
                

                
                <form action="signin.php" method="POST" id="create-form">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password"  name="password">
                        <div>
                            <input type="submit" value="Login">
                        </div>
                    </form>

                </div>

            </section>
             <section class="section-2">
             <aside class="side-bar">
            <div class="aside-one">
                <h6>Login today to track your expenses and save more!!</h6>
                <img src="assets/images/coins.jpg" width="100px" height="100px" alt="coins">
            </div>

             <div class="aside-two">
                 <h6>Start monitoring your spending and planing for the future </h6>
                 <img src="assets/images/journey.jpg" width="100px" height="100px" alt="journey">
             </div>
      </aside>
 </section> 


    </main>
    <footer>
        <div class="footer">
            <h4>Copyright 2021. Robert Gordon University SoC IT Module Project by Team J  </h4>

        </div>
    </footer>

    <?php
   
  
   ?>
</body>

</html>

<?php

include("connection.php"); //Establishing connection with our database
if(empty($_POST["email"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
 $email=$_POST['email'];
 $password=$_POST['password'];

 //Checking to see if user exist in the database
 $sql="SELECT uid FROM users WHERE  email='$email' and password='$password'";

 //Code to direct to the next page if database exist
 $result=mysqli_query($db,$sql);
 if(mysqli_num_rows($result) == 1)
 {
 header("location: index.php"); // Redirecting To another Page
 }else
{
 echo "Incorrect username or password";
 }
}




?>