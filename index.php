<?php 
    require 'db.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'header.php';
    ?>
    <title>Shopiroo</title>
</head>

<body>

    <!-- Note: this page is static, any changes to carousel and cards must be done manually -->

    <!-- top-nav -->
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="">Shopiroo</a>

            <div>
                <a class="nav-link d-inline text-dark" href="#" id="homeCart"><i class="fa fa-shopping-cart"></i></a>
                <a class="nav-link d-inline text-dark" href="#" id="homeHelp">Help</a>
                <a class="nav-link d-inline text-dark" href="login.php" id="homeLogin">Login</a>
            </div>
        </div>
    </nav>

    <!-- search-bar -->
    <div class="input-group myInput-group container mt-5">
        <input type="text" class="form-control myForm-control" placeholder="Search for your favorites">
        <div class="input-group-append">
            <button class="btn btn-dark" type="button"><i class="fa fa-search"></i></button>
        </div>
    </div>

    <!-- carousel -->
    <div id="home-carousel" class="carousel slide container mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources/carousel/fitbit-sense.png" class="d-block" alt="fitbit-sense">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark">Shop for smartwatches</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/carousel/iphone-13.png" class="d-block5" alt="iphone-13">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark">Shop for the latest smartphones</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/carousel/beats-solo.png" class="d-block" alt="beats-solo">
                 <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark">Shop for your favorite music accessories</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- cards -->
    <div class="mt-5 container myCards">
        <h4 class="text-center">Shop by categories</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-4">
                    <img src="resources/categories/shoes.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Shoes</h5>
                        <a href="#" class="btn btn-dark text-center">Shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4">
                    <img src="resources/categories/smartwatch.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Smartwatch</h5>
                        <a href="#" class="btn btn-dark text-center">Shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4">
                    <img src="resources/categories/apparel.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Apparel</h5>
                        <a href="#" class="btn btn-dark text-center">Shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4">
                    <img src="resources/categories/smartphone.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Smartphone</h5>
                        <a href="#" class="btn btn-dark text-center">Shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-4">
                    <img src="resources/categories/accessories.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Accessories</h5>
                        <a href="#" class="btn btn-dark text-center">Shop now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(function() {

            var isLogged = false;



            
            
        });  
    </script>
</body>
</html>