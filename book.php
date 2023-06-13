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

    <!-- CSS -->
    <link rel="style" href="css/.css">


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

<body style="background: white;height: 0vh;">
    <!-- navbar -->
    <nav>
        <a href="#" class="navbar-logo">Sulut<span>TOUR</span></a>
        <div class="navbar-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="#">Book</a></li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- booking -->
    <section class="booking">
        <h1 class="heading-title">
            book your trip!
        </h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many  :</span>
                    <input type="number" placeholder="number of guest" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
                <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>
    <!-- booking end -->






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