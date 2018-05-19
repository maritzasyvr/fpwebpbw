<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Mamma's Kitchen</title>

        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/css/font-awesome.min.css">
        <link rel="stylesheet" href="asset/css/owl.carousel.css">
        <link rel="stylesheet" href="asset/css/owl.theme.css">
        <link rel="stylesheet" href="asset/css/animate.css">
        <link rel="stylesheet" href="asset/css/flexslider.css">
        <link rel="stylesheet" href="asset/css/pricing.css">
        <link rel="stylesheet" href="asset/css/main.css">
       


        <script src="asset/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="asset/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"CAILANO"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img  src="asset/images/Logo_main.png" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">tentang kami</a></li>
                        <li><a href="#pricing">menu</a></li>
                        <li><a href="#reserve">reservasi</a></li>
                        <li><a href="#contact">kontak</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel">
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title" style="color:white">RASA BINTANG LIMA</h1>
                        <p class="header-sub-title" style="color:white">Lidah anda dimanjakan</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">HARGA KAKI LIMA</h1>
                        <p class="header-sub-title">Dompet anda tidak kekeringan</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            
        </section>



        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="asset/images/icons/about_color.png" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">Tentang kami</h2>
                                <p class="section-content-para">
                                    Mamma's kitchen adalah sebuat cafe khas anak muda yang menyajikan makanan dari mancanegara.
                                <p class="section-content-para">
                                    Dengan interior yang menawan, Mamma's kitchen hadir untuk memberikan kelezatan tak terhingga dari sajian-sajiannya yang menakjubkan.
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->


        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Intip menu-menu terbaik kami</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">Yuk coba!</li>
                                            
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                <?php
                                    foreach($menu as $m){
                                    ?>
                                    <li class="item dinner">

                                    <a href="#">
                                        <img src="asset/images/<?php echo $m->gambar ?>" style=" max-height: 200px; max-width: 200px;";  class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3><?php echo $m->judul ?></h3>
                                                <?php echo $m->deskripsi ?>
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">Rp. <?php echo $m->harga ?></h2>
                                </li>
                                <?php } ?>
                                

                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>   
                    </div>
                </div>

            </div> 
        </section>


        


       


     


       
        <!--== 14. Have a look to our dishes ==-->

        <section id="have-a-look" class="have-a-look hidden-xs">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="asset/images/icons/food_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="asset/images/menu-gallery/menu1.png" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu2.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu3.png" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu4.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu5.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu6.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu7.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu8.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu9.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu10.jpg" />
                                        </li>
                                        <li>
                                            <img src="asset/images/menu-gallery/menu11.jpg" />
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                            <h2 class="section-title">Hidangan nikmat khas Mamma's Kitchen</h2>
                        </div>
                        

                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>




        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="asset/images/icons/reserve_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reservasi meja anda!</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
         
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" id="myForm" action="<?php echo base_url();?>add" onSubmit="alert('Anda telah melakukan reservasi meja. Kami akan menghubungi anda melalui layanan SMS mengenai kesediaan tempat.');">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Nama">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf007; No HP">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" min="1" class="form-control reserve-form empty iconified" name="number" id="number" required="required" placeholder="&#xf017;  Jumlah Kursi">
                                            </div>
                                           

                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="datetime-local" class="form-control reserve-form empty iconified" name="date" id="time" required="required" placeholder="  &#xf095;  Waktu">
                                            </div>
                                             <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="event" id="event" required="required" placeholder="&#xf017;  Event">
                                            </div>
                                            
                                             
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="orderan" class="form-control reserve-form empty iconified" id="orderan" rows="3"  placeholder="  &#xf086;  Orderan"></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  Keterangan"></textarea>
                                        </div>


                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation" >
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Buat reservasi
                                            </button>

                                                        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Anda telah melakukan reservasi meja</h4>
                  </div>
                  <div class="modal-body">
                    <p>Kami akan segera menghubungi anda melalui SMS mengenai ketersediaan tempat. Terima Kasih &hellip;</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
                                        </div>
                                            
                                    </div>


                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Jam buka</h3>
                                    <p>Senin s.d. Jumat: 11.00 - 22.00 </p>
                                    <p>Sabtu & Minggu: 11:00 - 00:00 </p>

                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Hubungi kami</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>Jl. Mulyosari no 223A, Surabaya</p>
                            <p>031 - 5545675</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        






        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="asset/js/bootstrap.min.js"></script>
        <script src="asset/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="asset/js/jquery.mixitup.min.js" ></script>
        <script src="asset/js/wow.min.js"></script>
        <script src="asset/js/jquery.validate.js"></script>
        <script type="text/javascript" src="asset/js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="asset/js/jQuery.scrollSpeed.js"></script>
        <script src="asset/js/script.js"></script>
        

    </body>
</html>