<?php
// memanggil file functions

require 'function.php';


$product = query("SELECT * FROM product");


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NusaPenidaAdventures.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="kami.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

    <!--header start-->
    <section>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="#">

                    </a>
                </div>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Packages</a></li>
                        <li><a href="#">Tours</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <!--header end-->

    <!--slider start-->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Nusa Penida Adventure</h1>
            <p>Explore Bali like never before</p>
            <a href="#" class="btn">Book Now</a>
        </div>
    </section>
    <!--slider end-->

    <!--profile start-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile align-item-center">
                        <span>Welcome To Nusa Penida Adventure</span>
                        <h2>NUSA PENIDA ADVENTURE</h2>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-img">
                        <img src="Gallery/profile.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--profile end-->

    <!--Product Packages start-->
    <section class="py-5">
        <div class="container">
            <div class="product-judul">
                <span>Nusa Penida Adventure</span>
                <h2>DISCOVER OUR PACKAGES</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="counter-this">
                        <span>product</span>
                        <p>kami akan melayani kalian dengan sepenuh hati</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-this">
                        <span>product</span>
                        <p>kami akan melayani kalian dengan sepenuh hati</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-this">
                        <span>product</span>
                        <p>kami akan melayani kalian dengan sepenuh hati</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Packages end-->

    <!--parallax start-->
    <section class="py-5">
        <div class="parallax">
            <div class="parallax-bg"></div>
            <div class="parallax-content text-white">
                <h1>Welcome to Parallax Effect</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget risus sed ligula varius laoreet. Ut sodales urna et libero condimentum euismod. Duis rutrum commodo magna, a lobortis justo efficitur vel. Sed dapibus auctor lorem vel hendrerit</p>
            </div>
        </div>
    </section>
    <!--parallax end-->

    <!--product best seller start-->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <?php foreach ($product as $row) : ?>
                    <div class="col-md-3 mb-4 px-2">
                        <a href="#" class="nav-link product-card">
                            <div class="product-best h-100">
                                <img src="<?= $row["gambar"]; ?>" class="product-image">
                                <div class="best">
                                    <span>
                                        Best Seller
                                    </span>
                                </div>
                                <div class="body-card">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>
                                        <?= $row["lokasi"]; ?>
                                    </p>
                                    <h6>
                                        <?= $row["nama"]; ?>
                                    </h6>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>
                                        <i>
                                            ( All Review )
                                        </i>
                                    </span>
                                    <hr>
                                    <div class="tuch box d-flex justify-content-start align-items-start">
                                        <button>
                                            <a href="#" class="nav-link">
                                                Learn More
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </section>
    <!--product best seller end-->

    <!--why choose us start-->

    <section class="py-5" style="background-color: #014aad; color: white;">
        <div class="container">

            <div class="text-center test-text">
                <p>Nusa Penida Adventure</p>
                <h2>Why Choose Us ?</h2>
            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="why-kami align-items-center">
                        <i class="fa-brands fa-canadian-maple-leaf"></i>
                        <h3>Prioritizing Tourist Safety</h3>
                        <p>We prioritize your safety with rigorous measures and well-trained guides, ensuring a secure adventure.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="why-kami align-items-center">
                        <i class="fa-solid fa-globe"></i>
                        <h3>Experienced and Certified Guides</h3>
                        <p>Our guides are certified professionals with local expertise, offering knowledgeable and safe tours.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="why-kami align-items-center">
                        <i class="fa-solid fa-gem"></i>
                        <h3>24/7 Support and Assistance</h3>
                        <p>Enjoy peace of mind with our round-the-clock support, ready to assist you in any situation.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="why-kami align-items-center">
                        <i class="fa-solid fa-calendar-check" style="padding: 20px 24px;"></i>
                        <h3>Safe and Comfortable Transportation</h3>
                        <p>Travel with confidence in our well-maintained vehicles, providing comfort and safety throughout your trip.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--hwy choose us end-->

    <!-- blogger start -->
    <section class="py-5">
        <div class="container">
            <div class="this-blog">
                <span>Explore our Blog</span>
                <h3>Blog & News</h3>
            </div>
            <div class="row">
                <!-- Blog Item 1 -->
                <div class="col-md-4">
                    <div class="blog-img">
                        <img src="Gallery/bloger1.png" alt="Blog Image">
                        <div class="artikel-blog">
                            <span>Blog & Article | 16 Jul 2024</span>
                            <h2>Aktivitas Terbaik di Nusa Penida: Pemandangan Spektakuler dan Pengalaman Berkesan yang Harus Anda Saksikan</h2>
                            <p>Nusa Penida, sebuah pulau yang terletak di sebelah tenggara Bali, telah menjadi magnet bag......</p>
                        </div>
                        <div class="tuch-artikel">
                            <button class="button-button">
                                <a href="#" class="nav-link">Learn More</a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Blog Item 2 -->
                <div class="col-md-4">
                    <div class="blog-img">
                        <img src="Gallery/bloger2.png" alt="Blog Image">
                        <div class="artikel-blog">
                            <span>Blog & Article | 16 Jul 2024</span>
                            <h2>Mengapa Liburan di Nusa Penida Layak Dipertimbangkan: Keindahan Alam yang Menakjubkan dan Kehangatan Budaya yang Memikat</h2>
                            <p>Nusa Penida, sebuah permata tersembunyi di Indonesia, telah menjadi destinasi yang semakin......</p>
                        </div>
                        <div class="tuch-artikel">
                            <button class="button-button">
                                <a href="#" class="nav-link">Learn More</a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Blog Item 3 -->
                <div class="col-md-4">
                    <div class="blog-img">
                        <img src="Gallery/bloger3.png" alt="Blog Image">
                        <div class="artikel-blog">
                            <span>Blog & Article | 16 Jul 2024</span>
                            <h2>Eksplorasi Fakta Menarik tentang Nusa Penida: Keajaiban Alam dan Budaya yang Mengagumkan</h2>
                            <p>Nusa Penida, sebuah surga tersembunyi di antara kepulauan Indonesia, menawarkan keindahan ......</p>
                        </div>
                        <div class="tuch-artikel">
                            <button class="button-button">
                                <a href="#" class="nav-link">Learn More</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blogger end -->

    <!-- footer start -->
    <section class="py-5" style="background: #014AAD;">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="this-footer">
                        <img src="Gallery/logo.png" alt="Logo">
                    </div>
                    <div class="text-footer text-white">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                    </div>
                </div>

                <div class="col-md-4 text-white">
                    <div>
                        <h5>Contact Us</h5>
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Jl. Mulawarman, Abianbase, Kec. Gianyar, Kabupaten Gianyar, Bali 80515</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-phone"></i>
                        <p>+6287711852187</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                        gungdealit200815@gmial.com
                    </div>
                    <div class="">
                        <i class="fa-brands fa-whatsapp"></i>
                        <p>+6287711852187</p>
                    </div>

                </div>

                <div class="col-md-3 text-white">
                    <div>
                        <h5>Follow Us</h5>
                    </div>
                    <div class="footer-icon">
                        <a href="" class="nav-link">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="" class="nav-link d-flex">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- footer end -->


</body>

</html>