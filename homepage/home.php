<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../login/login.php");
    exit;
}

if (!isset($_SESSION['welcome_shown'])) {
    // If not set, show the welcome alert and set the session variable
    $_SESSION['welcome_shown'] = true;
    $showWelcomeAlert = true;
} else {
    // If set, do not show the welcome alert
    $showWelcomeAlert = false;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <!-- style -->
    <link rel="stylesheet" href="../css/home.css">


    <title>Flipkart Clone</title>

</head>

<body>
    <header class="w-100">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary py-2" id="navbar-example2">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html">
                    <div class="featured-image logo ">
                        <img src="../img/logo1.png" class="img-fluid" alt="" />
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link navs active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link navs dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#scrollspyHeading1">Shoes</a></li>
                                <li><a class="dropdown-item" href="#scrollspyHeading2">Watches</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pro-nav l-3">
                        <li class="nav-item dropdown">
                            <a class=" nav-link navs dropdown-toggle" href="#" id="navbarDropdown" role="button"    data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i>
                            </a>
                            <ul class="dropdown-menu pro-drop" style="margin-left: -5rem;">
                                <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                <li><a class="dropdown-item" href="#">My Cart</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../login/logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <!-- Welcome Alert -->
    <?php if ($showWelcomeAlert): ?>
        <div class="alert alert-success alert-dismissible fade show fs-4 welcome w-100" role="alert" id="autoDismiss">
            Welcome -
            <?php
            echo $_SESSION['email'];
            ?>
            !
        </div>
    <?php endif; ?>

    <main class="main">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <!-- <div class="carousel-item active c-item">
                    <img src="../img/SLIDER-1.jpg" class="d-inline-block w-100 c-img img-fluid" alt="...">
                </div> -->
                <div class="carousel-item active c-item">
                    <div class="carousel-caption adidas d-md-block">
                        <h1 class="offer">SALE</h1>
                        <p class="mt-2 fs-3">30% OFF ON ADIDAS</p>
                    </div>
                    <img src="../img/adidas1.png" class="d-block w-100 c-img" alt="...">
                </div>
                <div class="carousel-item c-item">
                    <img src="../img/pexels-solliefoto-298863 (1).jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-inline-block ">
                        <h5>Limited Offer!</h5>
                        <p class="fs-5">Branded Fashion products</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="../img/watch.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-inline-block d-md-block">
                        <p class="mt-4 fs-5">Go through various brand watches with exclusive offers</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="marketing" id="scrollspyHeading1">
            <div class="container bg-white rounded-3 shadow mt-5 w-100">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
                    tabindex="0">
                    <p class="fs-2 p-3" style="font-family: 'poppins', sans-serif;">Shoes</p>
                    <div class="row border p-3 gy-3 box-area text-center">

                        <div class="col-12 col-md-6 col-lg-3 ">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/nike.jpg" class="card-img-top c-img1" alt="...">

                                    <div class="card-body">
                                        <h5 class="card-title">Nike</h5>
                                        <p class="card-text">Min 20% off</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/adidas.jpg" class="card-img-top c-img1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Adidas</h5>
                                        <p class="card-text">Min 20% off</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/shoes2.webp" class="card-img-top c-img1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">USPA</h5>
                                        <p class="card-text">Min 20% off.</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/puma.jpg" class="card-img-top c-img1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Puma</h5>
                                        <p class="card-text">Min 20% off</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-5">

        <div class="marketing" id="scrollspyHeading2">
            <div class="container bg-white rounded-3 shadow mt-5 mb-5">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
                    tabindex="0">
                    <p class="fs-2 p-3" style="font-family: 'poppins', sans-serif;">Watches</p>
                    <div class="row border p-3 gy-3 box-area text-center">

                        <div class="col-12 col-md-6 col-lg-3 ">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/rolex.jpg" class="card-img-top c-img1" alt="...">

                                    <div class="card-body">
                                        <h5 class="card-title">Rolex</h5>
                                        <p class="card-text">Min 20% off</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/Breitling.jpg" class="card-img-top c-img1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Breitling</h5>
                                        <p class="card-text">Min 20% off</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/Armani.jpg" class="card-img-top c-img1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Emporio Armani</h5>
                                        <p class="card-text">Min 20% off.</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <ion-icon name="heart"></ion-icon>
                                <a href="">
                                    <img src="../img/fossil.webp" class="card-img-top c-img1" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Fossil</h5>
                                        <p class="card-text">Min 20% off</p>
                                        <div class="container button">
                                            <!-- <a href="#" class="btn btn-secondary fs-5 px-4 mt-2">Add to Cart</a> -->
                                            <a href="#" class="btn btn-primary fs-5 px-4 mt-2">Buy</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

    <script>
        // JavaScript  Approach
        // setTimeout(()=> {
        //     var alertBox = document.getElementById('autoDismiss');
        //     if (alertBox) {
        //         alertBox.classList.remove('show');
        //         alertBox.classList.add('fade');
        //         setTimeout(()=> {
        //             alertBox.remove();
        //         }, 300); // Ensure the alert is removed after the fade transition
        //     }
        // }, 2000);

        // jQuery Approach
        $(document).ready(() => {
            setTimeout(() => {
                $('#autoDismiss').alert('close');
            }, 2000); // 2 seconds
        });
    </script>

</body>

</html>