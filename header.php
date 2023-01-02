<!--Heading Sticky-top-->
<div class="header sticky-top">
    <!--Navbar containing logo of application-->
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php"> <!--this line will take the user back to home page upon clicking-->
            <img src="img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar"><!--hamburger button; for mobile devices, it expands the navbar-->
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar"><!--generic navbar; used for the sign up and login modals-->
            <ul class="navbar-nav">
                
                <?php
                    //checking if the user is logged in or not.
                    if(!isset($_SESSION["user_id"]))
                    {?>
                        <li class="nav-item">
                            <a class="nav-link" href="includes/signup_modal.php" data-toggle="modal" data-target="#signup-modal">
                                <i class="fas fa-user"></i>Signup
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="includes/login_modal.php" data-toggle="modal" data-target="#login-modal">
                                <i class="fas fa-sign-in-alt"></i>Login
                            </a>
                        </li>
                    <?php
                    }
                    else
                    {?>
                        <div class='nav-name'>
                            Hi, <?php echo $_SESSION["full_name"] ?>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class="fas fa-user"></i>Dashboard
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                            <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </a>
                        </li>
                    <?php
                    }
                ?>
            </ul>
        </div>
    </nav>
</div>
<div id="loading">
</div>