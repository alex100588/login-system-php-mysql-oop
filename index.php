<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login system</title>
</head>


<body>

    <header>
        <nav>
            <div>
                <h3>Alex Logo</h3>
                <ul class="main-menu">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBER</a></li>
                </ul>
                <ul class="menu-member">
                    <?php 
                        if(isset($_SESSION['userid'])) 
                        { 
                    ?>
                            <li><a href=""><?php echo $_SESSION['useruid']; ?></a></li>
                            <li><a href="includes/logout.inc.php">Logout</a></li>

                    <?php 
                        }
                         else
                        { 
                    ?>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Login</a></li>
                            
                    <?php } ?>
                    
                </ul>
            </div>
        </nav>
    </header>

    <section class="index-intro">
        <div class="index-intro-bg">
            <div class="wrapper">
                <div class="index-intro-c1">
                    <div class="video"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae iusto eos dolorum dolores perspiciatis fuga est accusantium, eius delectus repellat?</p>
                </div>
                <div class="index-intro-c2">
                    <h2>We make <br>professional <br>gear</h2>
                    <a href="#">FIND OUR GEAR HERE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>Sign Up</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="username">
                    <input type="password" name="pwd" placeholder="password">
                    <input type="password" name="pwdrepeat" placeholder="password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">Sign up</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Don't have an acoount yet? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>