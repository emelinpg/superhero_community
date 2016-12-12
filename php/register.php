<?php
require 'orm_functions.php';
require 'error_reporting.php';
if (isset($_POST['register']) && trim($_POST['register']) != '') {
    if (isset($_POST['username']) && isset($_POST['password']) && 
            trim($_POST['username']) != '' && trim($_POST['password']) != '') {
        $username = escape_quotes($_POST['username']);
        $password = escape_quotes(hash("sha512", $_POST['password']));
        // In case user doesn't enter a name
    $name = '';
        if ($_POST['name']) {
            $name = escape_quotes(strip_tags($_POST['name']));
        }
        $check = get_all_info("SELECT * FROM Login WHERE username='$username'");
        // Get the first instance of the user and store it into an array
        $userArray = $check->fetch_assoc();
        if (count($userArray) > 0) {
           die("That username already exists! Try creating another username. 
                        <a href='register.php'>Back</a>");
        }
        if (!ctype_alnum($username)) {
         die("Username contains special characters! Only numbers and 
                        letters are permitted. <a href='register.php'>Back</a>" );
        }
        if (strlen($username) > 20) {
       die("Username must contain less than 20 characters. 
                        <a href='register.php'>Back</a>" );
        }
        if (strlen($username) < 5) {
            die("Username must contain at least 6 characters. 
                        <a href='register.php'>Back</a>" );
        }
        $salt = hash("sha512", rand() . rand() . rand());
        insert_or_update_info("INSERT INTO Login (username, password, name, salt) 
            VALUES ('$username', '$password', '$name', '$salt')");
        setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
        setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");
        die("Your account has been created and you are now logged in.");
    } else {
        echo "Please enter a username and password.";
    }
}
?>
<!DOCTYPE html>
    <html>
        <style>
        </style>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css"/>
        </head>
            <body>
                <?php echo include "header.php" ?>
                <div id="container">
                    <div class="header">
                            <nav class="nav_menu">
                                <a href="../index.php"style="word-spacing: 2px;">About Us</a>  
                                <a href="../php/headlines.php"> Headlines</a>  
                                <a href="ranking.php"> Rankings</a> 
                                <a class="thechosenOne"  style="color: yellow;word-spacing: 4px;" href="register.php"> Registry</a>
                                <a href="#"style="word-spacing: 2px;">Hall of Fame</a> 
                                <a href="#">Forum</a> 
                                <a href="#">Locate</a> 
                                <a href="Contact.php">Contact</a>
                                <a href="Contact.php">Login</a> 
                                <a href="update.php">Update</a>
                            </nav> 
                    </div>
                    <br>
                    <div class="contact" style="color:black">
                      <h1>Create an account!</h1>
                                <form method="post" action="">
                                    <ul>
                                        <li>
                                            <label for="username">Username</label>
                                            <input id="username" type="text"name="username" value="" />
                                        </li>
                                        <li>
                                            <label for="password">Password</label>
                                            <input id="password" type="password" name="password" value="" />
                                        </li>
                                        <li>
                                            <label for="name">name</label>
                                            <input id="name" type="text" name="name" value="" />
                                        </li>
                                        
                                        <li>
                                            <input type="submit" name="register" value="register">
                                        </li>
                                    </ul>
                                </form>
                    </div>
                 </div>
                <?php include "footer.php" ?>
                <script src="js/jquery-2.2.3.min.js"></script>
                <script src="js/script.js"></script>
        </body>
    </html>