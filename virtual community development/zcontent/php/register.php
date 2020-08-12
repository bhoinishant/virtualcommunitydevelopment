<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $name    = stripslashes($_REQUEST['name']);
        $name    = mysqli_real_escape_string($con, $name);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email,phone,name, create_datetime)
                     VALUES ('$username', '" .($password) . "', '$email','$phone','$name', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
 <a href="../../index.html"><button style="margin-left: 620px; width: 50px;background-color:#06BACD; border:0px;border-radius: 10px ;">Exit</button></a>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" id="name" name="name" placeholder="Full Name" required />
        <input type="text" class="login-input" id="username" name="username" placeholder="Username" required />
        <input type="text" class="login-input" id="email" name="email" placeholder="Email Adress">
        <input type="tel" class="login-input" id="phone" name="phone" placeholder="Phone Number">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p><br>
    </form>
   
<?php
    }
?>
</body>
</html>
