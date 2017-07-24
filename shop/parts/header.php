<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }
        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
        /* Temporary fix for img-fluid sizing within the carousel */

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }
    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <?php if (!isAuth()) {?>
                <li class="nav-item">
                    <a class="nav-link" href="reg.php">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                </li>
                <?php } else {?>
                    <?php if ($_SESSION['user_name'] == 'admin') {?>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin.php">Admin Panel</a>
                        </li>
                    <?php }?>
                    <li class="nav-item">
                        <a class="nav-link" href="../basket.php">Basket <?=getBasketCounter()?></a>
                    </li>
                    <li class="nav-item">
                        <form method="post" action="">
                            <input type="submit" class="'btn btn-link nav-link" value="Logout">
                            <input type="hidden" name="action" value="log_out">
                        </form>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
