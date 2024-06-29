<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agenda</title>
    <link rel="shortcut icon" href="theme/images/icon1.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="theme/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="theme/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="theme/css/simple-line-icons.css">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="theme/css/fullcalendar.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="theme/css/owl.carousel.min.css">
    <!-- Main CSS -->
    <link href="theme/css/style.css" rel="stylesheet">
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
                        <a href="index.php" class="navbar-brand nav-brand2"><img class="img img-responsive" width="120px;" src="theme/images/maero_samping.png"></a>
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
    <!--============================= EVENTS =============================-->
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Agenda</h2>
                </div>
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-tab1">
                            <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Agenda Terbaru </a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                        <?php
                        // Koneksi ke database
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "db_maero";

                        // Membuat koneksi
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Mengecek koneksi
                        if ($conn->connect_error) {
                            die("Koneksi gagal: " . $conn->connect_error);
                        }

                        // Menjalankan query untuk mengambil data agenda
                        $sql = "SELECT * FROM tbl_agenda";
                        $result = $conn->query($sql);

                        // Memeriksa apakah hasil query tidak kosong
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="event-date">
                                                <h4><?php echo date("d", strtotime($row['tanggal'])); ?></h4>
                                                <span><?php echo date("M Y", strtotime($row['tanggal'])); ?></span>
                                            </div>
                                            <span class="event-time"><?php echo $row['waktu']; ?></span>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="event-heading">
                                                <h3><?php echo $row['nama']; ?></h3>
                                                <p><?php echo $row['deskripsi']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="event-underline">
                                </div>
                                <?php
                            }
                        } else {
                            echo "Tidak ada agenda yang ditemukan.";
                        }

                        // Menampilkan halaman pagination jika ada
                        // echo $page; // Ini harus ditangani secara terpisah jika pagination diperlukan

                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
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
                <div class="sitemap"style="padding-left: 50px;">
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
    <script src="theme/js/moment.min.js"></script>
    <script src="theme/js/fullcalendar.min.js"></script>
    <script src="theme/js/owl.carousel.min.js"></script>
    <script src="theme/js/validate.js"></script>
    <script src="theme/js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="theme/js/subscribe.js"></script>
    <!-- Script JS -->
    <script src="theme/js/script.js"></script>
</body>

</html>
