<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM barang");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP-kiki</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/Header-Blue--Sticky-Header--Smooth-Scroll.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/responsive-navbar.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
</head>

<body>
    <section>
        <div class="row" style="margin:0;"><div class="col" style="padding: 0; position: absolute; z-index: 1;">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="home.php">
                    <img src="assets/img/logo.png" style="width: 46px; height: 19px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-4">
                        <li class="nav-item active">
                            <a style="color: #fff;" class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #fff;" class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #fff;" class="nav-link" href="#offer">Offers</a></li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="produk.php">Product</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input style="background-color: rgba(0,0,0,0); border: 1px solid #fff; border-radius: 25px; color: #FFFFFF;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button style="background-color: #ffffff; border: none; color: #222222;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                <div style="width: 80%; height: 2px; margin-left: auto; background-color: #ffffff;"></div>
            </div></div>
        </section>
        <section>
            <div class="row" style="margin:0;">
                <div class="col" style="padding:0;">
                    <div class="d-flex justify-content-center align-items-center" style="width:100%;height:600px;background-image:url(&quot;assets/img/AGRI3.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-3 offset-md-2">
                                    <div class="row">
                                        <div class="col">
                                            <p style="color:#f4f4f4;"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h1 style="color:#ffffff;">Benih Pilihan Anda</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 d-flex flex-column justify-content-end">
                                    <p style="color:#f4f4f4;">Providing quality products and individualized services at competitive raters</p>
                                    <div style="height:2px;background-color:#ffffff;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top:120px;">
            <div id="about" class="container">
                <div class="row">
                    <div class="col-12 col-md-6"><img style="background-image:url(&quot;assets/img/BAPAK.jpg&quot;);width:100%;background-size:cover;height:100%;"></div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-8">
                                <h1>Kami adalah</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10 col-lg-8">
                                <p class="text-justify" style="color:#696969;">Usaha dagang benih lokal yang merupakan usaha murni milik perorangan dengan Kegiatan usaha pokok menjual Pupuk dan obat-obatan Pertanian (SAPROTAN). Sistem perdagangan yang kami berlakukan Murni Jual beli. Beli barang di Distributor atau dealer dan kampaser dengan harga tertentu, taruh di toko dan selanjutnya menunggu petani belanja ke Toko dgn keuntungan 5-10% dari modal<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="offer" class="container">
                    <div class="row d-flex align-items-center" style="margin-top:120px;">
                        <div class="col-12 col-md-3 offset-md-1">
                            <h1>Kenapa Kami</h1>
                        </div>
                        <div class="col-12 col-md-7">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.<br></p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:50px;">
                        <div class="col d-flex flex-column justify-content-center align-items-center">
                            <div style="width:450px;object-fit:cover;height:600px;background-image:url(&quot;assets/img/3.jpg&quot;);background-size:cover;background-position:center;margin-bottom:16px;"></div>
                            <p>Lorem ipsum dolor sit bodo amet</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:80px;">
                        <div class="col-12 col-md-4">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center" style="padding:15px 15px;"><img src="assets/img/shovel.png" style="width:64px;height:64px;"></div>
                            </div>
                            <div class="row" style="margin-top:25px;">
                                <div class="col">
                                    <p>Lorem ipsum dolor sit bode amet semuanya</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center" style="padding:15px 15px;"><img src="assets/img/sprout.png" style="width:64px;height:64px;"></div>
                            </div>
                            <div class="row" style="margin-top:25px;">
                                <div class="col">
                                    <p>Lorem ipsum dolor sit bode amet semuanya</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center" style="padding:15px 15px;"><img src="assets/img/harvest.png" style="width:64px;height:64px;"></div>
                            </div>
                            <div class="row" style="margin-top:25px;">
                                <div class="col">
                                    <p>Lorem ipsum dolor sit bode amet semuanya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:80px;">
                        <div class="col-12 col-md-8 offset-md-2">
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.<br></p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:120px;"> <div class="col"><img src="assets/img/2.jpg" style="width:100%;height:350px;object-fit:cover;"></div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row d-flex align-items-center" style="margin-top:120px;">
                        <div class="col-12 col-md-4 offset-md-2">
                            <h1>Produk Kami</h1>
                        </div>
                        <div class="col-12 col-md-7 offset-md-2">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.<br></p>
                        </div>
                    </div>
                    <div class="row" style="width: 100% !important; margin: 50px 0 0 0;">
                        <div class="col-xl-12 banner-corousel">
                            <?php
                                while($product = mysqli_fetch_array($result)){
                                    ?>
                                    <div class="item d-flex flex-column justify-content-between align-items-center" style="height: 400px; border-radius: 3px; margin: 0 8px;">
                                        <img src="<?=$product['img']?>" style="width: 100%; height: 350px; object-fit: cover;">
                                        <p><?=$product['nama']?></p>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <a href="produk.php"><button type="button" class="btn btn-success" style="width: 250px; margin: 32px 0 0 0; background-color: #1b2e26">More</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section style="background-color:#1b2e26;margin-top:60px;padding:60px 0;">
                <div class="container" id="info-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center" style="color:#ffffff;">Contact</h1>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6" id="contact-box">
                            <p id="contact-text" style="color:#ffffff;"> we are very approachable and would love to speak to you.</br> feel free to call, send us an email or simply complete the enquiry form </p>
                            <div class="info-box"><i class="fa fa-map-marker my-info-icons" style="color:#ffffff;"></i><span class="text-uppercase text-info" style="color:rgb(255,255,255) !important;">Address: </span><span style="color:#f1f1f1;">Komplek Pertokoan Pasar Tradisional, Lombok Timur, Masbagik</br></span></div>
                            <div
                            class="info-box"><i class="fa fa-envelope my-info-icons" style="color:rgb(255,255,255);"></i><span class="text-uppercase text-info" style="color:#ffffff !important;">Email: </span><span style="color:#f1f1f1;">amrinsasako@yahoo.co.id </span></div>
                            <div
                            class="info-box"><i class="fa fa-phone-square my-info-icons" style="color:rgb(255,255,255);"></i><span class="text-uppercase text-info" style="color:#ffffff !important;">Phone: </span><span style="color:#f1f1f1;">+6281904082015 </span></div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 site-form">
                            <form id="my-form">
                                <div class="form-group"><label class="sr-only" for="firstname">First Name</label><input class="form-control" type="text" name="nama" placeholder="Nama" autofocus="" id="firstname"></div>
                                <div class="form-group"><label class="sr-only" for="phonenumber">Phone Number</label><input class="form-control" type="tel" name="email" required="" placeholder="E-mail" id="phonenumber"></div>
                                <div class="form-group"><label class="sr-only" for="email">Email Address</label><input class="form-control" type="text" name="subjek" required="" placeholder="Subjek" id="email"></div>
                                <div class="form-group"><label class="sr-only" for="messages">Last Name</label><textarea class="form-control" rows="4" name="pesan" required="" placeholder="Pesan"></textarea></div><button class="btn btn-light btn-lg" type="submit" id="form-btn">Send</button></form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll.js"></script>
                <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll.js"></script>
                <script src="assets/js/Slider_Carousel_webalgustocom.js"></script>
                <script src="assets/js/slick.min.js" type="text/javascript"></script>

                <script type="text/javascript">
// A $( document ).ready() block.
$( document ).ready(function() {
    $('.banner-corousel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
});
</script>
</body>

</html>