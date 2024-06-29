<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gallery Photo</title>
  <link rel="shortcut icon" href="theme/images/icon1.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="theme/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="theme/css/font-awesome.min.css">
  <!-- Simple Line Font -->
  <link rel="stylesheet" href="theme/css/simple-line-icons.css">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="theme/css/magnific-popup.css">
  <!-- Image Hover CSS -->
  <link rel="stylesheet" type="text/css" href="theme/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="theme/css/set2.css">

  <!-- Masonry Gallery -->
  <link href="theme/css/animated-masonry-gallery.css" rel="stylesheet" type="text/css">
  <!-- Main CSS -->
  <link href="theme/css/style.css" rel="stylesheet">

  <style>
    .gallery-img {
      width: 100%;
      height: 200px; /* Adjust the height as needed */
      object-fit: cover;
      object-position: center;
      margin-bottom: 20px;
      margin-right: 10px;
    }
  </style>
</head>

<body>
<div style="position:fixed;left:20px;bottom:20px;">
    <a href="https://wa.me/message/XKFMJSL53ZD7I1">
        <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px;display:flex;align-items:center;border:none;padding:5px 10px;cursor:pointer;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" style="height:24px;width:24px;margin-right:10px;" alt="WhatsApp Logo"> Whatsapp Kami
        </button>
    </a>
</div>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="header-top_address">
                    <div class="header-top_list">
                        <span class="icon-phone"></span>0823-3311-0076
                    </div>
                    <div class="header-top_list">
                        <span class="icon-envelope-open"></span>maeroindonesia@gmail.com
                    </div>
                    <div class="header-top_list">
                        <span class="icon-location-pin"></span>Perumahan Gubernur Graha Praja Indah, Blok C13 No.9, Kec. Manggala, Kota Makassar
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <div class="header-top_login">
                    <a href="contact.php">Hubungi Kami</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="" class="navbar-brand nav-brand2">
                            <img class="img img-responsive" width="120px;" src="theme/images/maero_samping.png">
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="agenda.php">Pelaporan & Monitoring</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="galeri.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
    </section>
    <!--//END HEADER -->
    <!--============================= Gallery =============================-->
    <div class="gallery-wrap">
        <div class="container">
            <!-- Style 2 -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gallery-style">Gallery Photo</h3>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div id="gallery">
                        <div id="gallery-content">
                        <div id="gallery-content-center">
                            <?php
                            // Connect to the database
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "db_maero";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Fetch images from the database
                            $sql = "SELECT gambar FROM tbl_galeri";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo '<a href="admin/app/add/images/' . $row["gambar"] . '" class="image-link2">';
                                    echo '<img src="admin/app/add/images/' . $row["gambar"] . '" class="all img-fluid gallery-img" alt="#">';
                                    echo '</a>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//End Style 2 -->
        </div>
    </div>
    <!--//End Gallery -->
    <!--============================= FOOTER =============================-->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="/">
                        <img src="theme/images/maero_samping_footer.png" class="img-fluid" alt="footer_logo">
                    </a>
                    <p>&copy; <?php echo date('Y'); ?> Maero Indonesia</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Menu Utama</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="agenda.php">Monitoring</a></li>
                        <li><a href="galeri.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3>Hubungi Kami</h3>
                    <p><span>Alamat: </span>Perumahan Gubernur Graha Praja Indah, Blok C13 No.9, Manggala, Kec. Manggala, Kota Makassar, Sulawesi Selatan, 90562.</p>
                    <p>Email: maeroindonesia@gmail.com</p>
                    <p>Phone: 0823-3311-0076</p>
                    <ul class="footer-social-icons">
                        <li><a href="https://www.facebook.com/maero.org"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/maero_foundation?igsh=a3E1OHNqbTBlczNh"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                        <li><a href="http://www.youtube.com/@MaeroIndonesia" aria-hidden="true"><i class="fa fa-youtube fa-tw" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="theme/js/jquery.min.js"></script>
    <script src="theme/js/tether.min.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="theme/js/slick.min.js"></script>
    <script src="theme/js/waypoints.min.js"></script>
    <script src="theme/js/counterup.min.js"></script>
    <script src="theme/js/owl.carousel.min.js"></script>
    <script src="theme/js/validate.js"></script>
    <script src="theme/js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="theme/js/subscribe.js"></script>

    <script src="theme/js/jquery-ui-1.10.4.min.js"></script>
    <script src="theme/js/jquery.isotope.min.js"></script>
    <script src="theme/js/animated-masonry-gallery.js"></script>
    <!-- Magnific popup JS -->
    <script src="theme/js/jquery.magnific-popup.js"></script>
    <!-- Script JS -->
    <script src="theme/js/script.js"></script>
</body>
</html>
