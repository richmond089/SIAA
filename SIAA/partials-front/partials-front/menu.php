<?php include('database/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEX EAT NAAA</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="http://localhost/lexeatnaaa/" title="Logo">
                    <img src="images/logo_lex.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
<br>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Foods</a>
                    </li>
                    <li>
                        <a href="about.php"<?php echo SITEURL; ?>">About Us</a>
                    </li>
                    <?php
                    if(empty($_SESSION["u_id"]))
                    {
                        echo '<li class="nav-item"><a href="login_button.php" class="login-button">Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
</body>
</html>