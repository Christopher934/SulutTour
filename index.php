<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="./style/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title>SulutTour</title>
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/feather-icons"></script>

    <!--font awesome-->
    <script src="https://kit.fontawesome.com/652cc131a1.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navbar -->
    <nav>
        <a href="index.php" class="navbar-logo">Sulut<span>TOUR</span></a>
        <div class="navbar-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="book.php">Book</a></li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero -->
    <section class="hero" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(asset/Danau\ linow.jpg) no-repeat;">
                    <div class="content">
                        <span>Tomohon</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(asset/bitung.jpg) no-repeat;">
                    <div class="content">
                        <span>Bitung</span>
                        <h3>Discover the new place</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(asset/manado2.jpg) no-repeat;">
                    <div class="content">
                        <span>Manado</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
    </section>
    <!-- hero end -->

    <!-- about -->
    <div class="container-about">
        <section id="about" class="about-home">
            <h2 class="heading-title">About</h2>

            <div class="content">
                <h4>Sulawesi Utara</h4>
                <p>&emsp; Also known as North Sulawesi, is a province located on the northern peninsula of the island of Sulawesi in Indonesia. The capital city of the province is Manado, which is also the largest city in the region. North Sulawesi is known
                    for its stunning natural beauty, including its pristine beaches, coral reefs, and volcanic mountains. It is also home to a rich cultural heritage, with a diverse population that includes indigenous Minahasan people, as well as Chinese,
                    Javanese, and other ethnic groups.</p>
                <br>
                <br>
                <p>North Sulawesi is a popular destination for tourists who come to enjoy its unique cuisine, which includes dishes made with fish, coconut, and spices like cloves and nutmeg. The region is also known for its vibrant Christian community,
                    with many churches and religious festivals throughout the year. Overall, Sulawesi Utara is a fascinating and beautiful province that offers visitors a unique glimpse into the rich culture and natural beauty of Indonesia.
                </p>
            </div>
        </section>
    </div>
    <!-- about end -->

    <!-- services -->
    <section class="services" id="services">
        <h2 class="heading-title">Our Services</h2>

        <div class="box-container">

            <div class="box">
                <img src="asset/adventure.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="asset/tour-guide.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="asset/campfire.png" alt="">
                <h3>Campfire</h3>
            </div>

            <div class="box">
                <img src="asset/signpost.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="asset/camping.png" alt="">
                <h3>Camping</h3>
            </div>

            <div class="box">
                <img src="asset/backpacking.png" alt="">
                <h3>Treckking</h3>
            </div>

        </div>
    </section>
    <!-- services end -->

    <!-- Package -->

    <section class="home-package" id="package">
        <h1 class="heading-title">Our Package</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="asset/image1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventur & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ullam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="asset/image2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventur & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ullam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="asset/image3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventur & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ullam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>

    <!-- Package end-->



    <!-- footer -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#package">Package</a>
            <a href="#team">Team</a>
        </div>
        <div class="credit">
            <p>Created by <a href="">sulutTOUR</a>. | &copy; 2023.</p>
        </div>

    </footer>
    <!-- footer end -->


    <!-- ScrollTop Button -->
    <a href="#" class="scroll">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <!-- ScrollTop Button end -->

    <!--icon  -->
    <script>
        feather.replace()
    </script>

    <!-- Swiper JS -->
    <script src="./Js/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- my js -->

    <script src="./js/script.js"></script>
</body>

</html>