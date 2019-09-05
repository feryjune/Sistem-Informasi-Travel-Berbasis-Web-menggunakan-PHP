<?php 
$link = mysqli_connect("localhost","root","","db_travel");
    
   
    $id = $_GET["id"];
    
   
    $result = mysqli_query($link,"SELECT * FROM tabel_postingan WHERE id_post='$id'");

    
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon2.png" type="image/png">
    <title>Travel Cinematic27</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--================ Offcanvus Menu Area =================-->
  <div class="side_menu">
        <div class="logo">
            <a href="index.php">
                <img src="img/logo1.png" alt="">
            </a>
        </div>
        <ul class="list menu-left">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
    
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        Daftar Travel
                    </button>
                    <div class="dropdown-menu">
                       <a class="dropdown-item" href="about-us.php">Sepinggan Indah Tour-Travel-Ticket</a>
                        <a class="dropdown-item" href="amenities.php">Ahya Tour & Travel</a>
                        <a class="dropdown-item" href="elements.php">Leana Tour</a>
               
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        Destinasi
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="blog.php">Destinasi Terpopuler</a>
                     <a class="dropdown-item" href="single-blog.php">Destinasi Terbaru</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="contact.php">About</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
        </ul>
    </div>
    <!--================ End Offcanvus Menu Area =================-->

    <!--================ Canvus Menu Area =================-->
    <div class="canvus_menu">
        <div class="container">
            <div class="toggle_icon" title="Menu Bar">
                <span></span>
            </div>
        </div>
    </div>
    <!--================ End Canvus Menu Area =================-->

   
    <!--================ End Offcanvus Menu Area =================-->

    <!--================ Canvus Menu Area =================-->
    <div class="canvus_menu">
        <div class="container">
            <div class="toggle_icon" title="Menu Bar">
                <span></span>
            </div>
        </div>
    </div>
    <!--================ End Canvus Menu Area =================-->

    <section class="top-btn-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="index.php" class="main_btn">
                       Travel Cinematic
                       
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php 
                           
    while ($data = mysqli_fetch_array($result)) {
    ?>
    <!--================ Start banner section =================-->
   <section class="home-banner-area relative">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="header-right col-lg-6 col-md-6">
                    <h1>
                      <?php echo $data['judul_postingan'];?>
                    </h1>
                    <p class="pt-20">
                        <?php echo $data['deskripsi'];?>
                    </p>
                  
                </div>

                <div class="col-lg-6 col-md-6 header-left">
                    <div class="">
                        <img class="img-fluid w-100" src="<?php echo $data['foto_konten'];?>" alt="">
                    </div>
                    <div class="video-popup d-flex align-items-center">
                        <a class="play-video video-play-button animate" href="<?php echo $data['video'];?>"
                            data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                            <span></span>
                        </a>
                        <div class="watch">
                            <h5>Watch Intro Video</h5>
                            <p>You will love our execution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner section =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo $data['foto_konten'];?>" alt="">
                            </div>
                        </div>
                       
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#"></a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#"><?php echo $data['kategori'];?><i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#"><?php echo $data['tgl_posting'];?><i class="lnr lnr-calendar-full"></i></a></li>
                                  
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/fery.amatir"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/fery62623411"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=082229086263"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="https://www.instagram.com/feryjune/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $data['judul_postingan'];?></h2>
                            <p class="excert">
                               <?php echo $data['isi_postingan'];?>
                            </p>
                           
                        </div>
                        <?php } ?>
                        <div class="col-lg-12">
                            <div class="quotes">
                              
                            </div>
                            <div class="row">
                                <div class="col-6">
                                 
                                </div>
                                <div class="col-6">
                                 
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>
                                       
                                    </p>
                                    <p>
                                       
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="comments-area">
                        <?php  $komentar = "SELECT * FROM komentar";
                        $query_komentar= mysqli_query($link,$komentar);
                        $rows = mysqli_num_rows($query_komentar);
                        ?>
                     <h4>  <?= $rows; ?> Komentar</h4>
                        <?php 
                       
                        while ($data_komentar = mysqli_fetch_array($query_komentar)) {
                        ?>
                        <div class="comment-list"> <!-- end -->
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#"><?= $data_komentar['nama']; ?></a></h5>
                                        <p class="date"><?= $data_komentar['tgl_komentar']; ?> </p>
                                        <p class="comment">
                                           <?= $data_komentar['isi_komentar']; ?>
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div> <!-- end -->
                        <?php } ?>
                    </div>
                    <div class="comment-form">
                        <?php 
                        $link = mysqli_connect("localhost","root","","db_travel");

                        if (isset($_POST['submit'])) {
                            $name   =  $_POST['name'];
                            $email  =  $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                            $date = date("Y-m-d");

                            $sql = "INSERT INTO komentar VALUES(NULL,'$name','$email','$subject','$message','$date','$id')";
                            mysqli_query($link,$sql);
                        }
                        ?>
                        <h4>Leave a Reply</h4>
                        <form method="post">
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                    
                            <input type="submit" name="submit" value="comment" class="main_btn">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="">
                                <span class="input-group-btn">
                                    
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author1.jpg" alt="">
                            <h4>Fery June</h4>
                            <p>Video Travelers | Editig Video</p>
                            <div class="social_icon">
                               <a href="https://www.facebook.com/fery.amatir"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/fery62623411"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/feryjune/"><i class="fa fa-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=082229086263"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <p>Nama  : Veri Junia Putra <br>
                        TTL   : Tangerag,27 Juni 1998<br>
                        Alamat:Ds. Kapas Kec.Kapas Kab.Bojonegoro<br><br></p>
                            <div class="br"></div>
                        </aside>
                       <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/pos1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=4">
                                        <h3>Khayangan Api</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/pos2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=1">
                                        <h3>Waduk Pacal</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/pos3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=2">
                                        <h3>Kebun Belimbingy</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/blog/popular-post/pos4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=8">
                                        <h3>Bendungan Gerak </h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=4" class="d-flex justify-content-between">
                                        <p>Budaya</p>
                                        <p>3</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=3" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>2</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=2" class="d-flex justify-content-between">
                                        <p>Agrowisata</p>
                                        <p>1</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/Travel/tugas_akhir/page.php?id=8" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>2</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without giving them
                                a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                 <li><a href="http://localhost/Travel/tugas_akhir/page.php?id=6">Budaya</a></li>
                                <li><a href="http://localhost/Travel/tugas_akhir/page.php?id=5">Adventure</a></li>
                                <li><a href="http://localhost/Travel/tugas_akhir/page.php?id=2">Agrowisata</a></li>
                                <li><a href="http://localhost/Travel/tugas_akhir/page.php?id=1">Architecture</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area">
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                      <h6>About Travel Cinematic</h6>
                        <p>
                            A site that introduces tourism objects in Bojonegoro Regency
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Navigation Links</h6>
                        <div class="row">
                            <ul class="col footer-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">Daftar Travel</a></li>
                                
                            </ul>
                            <ul class="col footer-nav">
                                <li><a href="blog.php">Destinasi</a></li>
                                <li><a href="contact.php">About</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>For business professionals caught between high OEM price mediocre print and graphic.</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instafeed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                           <li><img src="img/instagram/ist1.jpg" alt=""></li>
                            <li><img src="img/instagram/ist2.jpg" alt=""></li>
                            <li><img src="img/instagram/ist3.jpg" alt=""></li>
                            <li><img src="img/instagram/ist4.jpg" alt=""></li>
                            <li><img src="img/instagram/ist5.jpg" alt=""></li>
                            <li><img src="img/instagram/ist6.jpg" alt=""></li>
                            <li><img src="img/instagram/ist7.jpg" alt=""></li>
                            <li><img src="img/instagram/ist8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div>
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
CCopyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.youtube.com/channel/UC6gJBVAMPtgnq96apbKcIMQ?view_as=subscriber" target="_blank">Fery June Channel</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="footer-social d-flex align-items-center">
                            <a href="https://www.facebook.com/fery.amatir"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/fery62623411"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/feryjune/"><i class="fa fa-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=082229086263"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/swiper/js/swiper.min.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>