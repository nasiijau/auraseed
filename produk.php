<?php
include_once("config.php");
$pupuk = mysqli_query($mysqli, "SELECT * FROM barang WHERE tipe_id = 1");
$benih = mysqli_query($mysqli, "SELECT * FROM barang WHERE tipe_id = 2");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP-kiki-login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
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
        <a style="color: #fff;" class="nav-link" href="produk.php">Produk</a>
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
                <div class="d-flex justify-content-center align-items-center" style="width:100%;height:450px;background-image:url(&quot;assets/img/agri3.jpg&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
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
                                        <h1 style="color:#ffffff;">Produk</h1>
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
    <section style="margin-top:80px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.<br></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-2" style="margin-top: 80px;">
                    <h1>Benih</h1>
                </div>
            </div>
            <div class="row" style="width: 100% !important; margin: 50px 0 0 0;">
                <div class="col-xl-12 banner-corousel">
                <?php while($product = mysqli_fetch_array($benih)){?>
                    <div class="item d-flex flex-column justify-content-between align-items-center" style="height: 450px; border-radius: 3px; margin: 0 8px;">
                        <img src="<?=$product['img']?>" style="width: 100%; height: 250px; object-fit: cover;">
                        <div class="row" style="padding: 8px 0 16px 0;">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h3><?=$product['nama']?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><?=$product['deskripsi']?></p>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-end align-items-center" style="margin-bottom: 16px;">
                                    <div class="col-12 col-md">
                                        <p><?=$product['berat']?> Gram</p>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="btn btn-success" style="width: 120px; background-color: #45a66c;">Detail</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-2" style="margin-top: 80px;">
                    <h1>Pupuk</h1>
                </div>
            </div>
            <div class="row" style="width: 100% !important; margin: 50px 0 0 0;">
                <div class="col-xl-12 banner-corousel">
                <?php while($product = mysqli_fetch_array($pupuk)){?>
                    <div class="item d-flex flex-column justify-content-between align-items-center" style="height: 450px; border-radius: 3px; margin: 0 8px;">
                        <img src="<?=$product['img']?>" style="width: 100%; height: 250px; object-fit: cover;">
                        <div class="row" style="padding: 8px 0 16px 0;">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h3><?=$product['nama']?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><?=$product['deskripsi']?></p>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-end align-items-center" style="margin-bottom: 16px;">
                                    <div class="col-12 col-md">
                                        <p><?=$product['berat']?> Gram</p>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="btn btn-success" style="width: 120px; background-color: #45a66c;">Detail</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color:#1b2e26;padding:60px 0;margin-top:60px;">
        <div class="container" id="info-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="color:#ffffff;">Contact</h2>
                </div>
                <div class="col-12 col-sm-6 col-md-6" id="contact-box">
                    <p id="contact-text" style="color:#ffffff;">we are very approachable and would love to speak to you.</br> feel free to call, send us an email or simply complete the enquiry form </p>
                    <div class="info-box"><i class="fa fa-map-marker my-info-icons" style="color:#ffffff;margin-right:15px;"></i><span class="text-uppercase text-info" style="color:rgb(255,255,255) !important;">Address: </span><span style="color:#f1f1f1;">Komplek Pertokoan Pasar Tradisional, Lombok Timur, Masbagik</span></div>
                    <div
                        class="info-box"><i class="fa fa-envelope my-info-icons" style="color:rgb(255,255,255);margin-right:15px;"></i><span class="text-uppercase text-info" style="color:#ffffff !important;">Email: </span><span style="color:#f1f1f1;">amrinsasako@yahoo.co.id </span></div>
                <div
                    class="info-box"><i class="fa fa-phone-square my-info-icons" style="color:rgb(255,255,255);margin-right:15px;"></i><span class="text-uppercase text-info" style="color:#ffffff !important;">Phone: </span><span style="color:#f1f1f1;">+6281904082015 </span></div>
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