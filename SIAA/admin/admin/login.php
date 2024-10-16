<?php include('../database/db.php'); ?>

<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="../css/admin/admin_login.css">
    </head>

    <body>
        
        <div class="login">
            <br><br><br>
            <h2 class="text-center">Admin Login</h2>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>
            <div class="container">
            <div class="myform">
            <form action="" method="POST">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            </div>
            <div class="image">
      <img src="../images/logo_lex.png">
    </div>
            </div>
        </div>

    </body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = ($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username;

            header('location:'.SITEURL.'admin/');
        }
        else
        {
            $message = "Username or Password is incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>