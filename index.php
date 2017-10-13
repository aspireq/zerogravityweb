<?php require 'api/functions.php'; ?>


<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from zerogravityweb.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2017 11:54:35 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.png" sizes="24X24" type="image/png">
        <title>Zero Gravity</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/hover.css">
        <link href="css/base.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/services.css">
        <link rel="stylesheet" type="text/css" href="css/hosting.css">
        <link rel="stylesheet" type="text/css" href="css/domain.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/jquery.funnyText.css" />
        <link href="../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/mockup4.css" />
        <script src="js/modernizr.custom.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .mod{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>

        <div class="container">

            <!-- Modal -->
            <div class="modal fade mod" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Domain Availavility</h4>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">          
                                <table class="table">
                                    <thead>
                                        <tr class="success">
                                            <th style="color:red">Domainname</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="d">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div id="header">
            <header>
                <div class="container-fluid header-part-1">
                    <div class="container">
                        <ul class="list-inline header-list-1 pull-left">
                            <li>
                                <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:support@zerogravityweb.in">support@zerogravityweb.in</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>&nbsp;+91 8401791999
                            </li>
                        </ul>
                        <ul class="list-inline pull-right header-social">
                            <li>
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook hvr-backward"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fa fa-twitter hvr-backward"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/collections/featured"><i class="fa fa-google-plus hvr-backward"></i></a> 
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="container" id="sticky">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>  
                <a class="navbar-brand" href="index-2.html">
                    <img alt="Brand" src="img/logo.png" width="180">
                </a>
                <div class="collapse navbar-collapse js-navbar-collapse zz">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown col-md-15 mega-dropdown">
                            <a href="aboutus.html" class="">About Us</a>
                        </li>
                        <li class="dropdown col-md-15 col-sm-15 mega-dropdown">
                            <a class="dropdown-toggle">Our Services</a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-sm-4 col-md-4">
                                    <ul>
                                        <li><a href="mobileapp.html"><img src="img/smartphone.png" alt="mobile app"/> Mobile App Development</a></li>
                                        <li class="divider"></li>
                                        <li><a href="websitemaintenance.html"><img src="img/web.png" alt="web"/> Website Maintenance </a></li>
                                        <li class="divider"></li>
                                        <li><a href="websitedesigning.html"><img src="img/design.png" alt="design"/> Website Designing </a></li>
                                        <li class="divider"></li>
                                        <li><a href="ecommercewebsite.html"><img src="img/ecommerce.png" alt="ecommerce"/> E-commerce Website Development</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4 col-md-4">
                                    <ul>
                                        <li><a href="bulksms.html"><img src="img/sms.png" alt="sms"/> Bulk SMS Marketing</a></li>
                                        <li class="divider"></li>
                                        <li><a href="seo.html"><img src="img/seo.png" alt="seo"/> SEO Promotion</a></li>
                                        <li class="divider"></li>
                                        <li><a href="emailmarketing.html"><img src="img/email.png" alt="email"/> E-mail Marketing</a></li>
                                        <li class="divider"></li>
                                        <li><a href="socialmarketing.html"><img src="img/share.png" alt="share"/> Social Media Marketing </a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4 col-md-4">
                                    <img src="img/servicemenu.png" class="img-responsive" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown col-md-15 mega-dropdown">
                            <a class="dropdown-toggle">Hosting</a>
                            <ul class="dropdown-menu mega-dropdown-menu mega-dropdown-menu-2c row">
                                <li class="col-sm-6 col-md-6">
                                    <ul>
                                        <li><a href="sharedhosting.html"><img src="img/sharedhosting.png" alt="cloudhosting"/> Shared Hosting</a></li>
                                        <li class="divider"></li>
                                        <li><a href="resellerhosting.html"><img src="img/reseller.png" alt="reseller"/> Reseller Hosting </a></li>
                                        <li class="divider"></li>
                                        <li><a href="cloudhosting.html"><img src="img/cloudhosting.png" alt="cloudhosting"/> Cloud Hosting</a></li>
                                        <li class="divider"></li>
                                        <li><a href="vpshosting.html"><img src="img/vps.png" alt="vps"/> VPS Hosting </a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-6 col-md-6">
                                    <!--  <h4>Lorem ipsum dummy text</h4>
                                     <button class="btn btn-primary hvr-shutter-out-horizontal">Customize Now</button> -->
                                    <!-- <hr/> -->
                                    <img src="img/hostingmenu.png" class="img-responsive" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown col-md-15 mega-dropdown">
                            <a class="dropdown-toggle">Domains</a>
                            <ul class="dropdown-menu mega-dropdown-menu mega-dropdown-menu-2c row">
                                <li class="col-sm-6 col-md-6">
                                    <ul>
                                        <li><a href="registerdomain.html"><img src="img/registerdomain.png" alt="vps"/> Register Domain</a></li>
                                        <li class="divider"></li>
                                        <li><a href="transferdomain.html"><img src="img/transferdomain.png" alt="transferdomain"/> Transfer Domain</a></li>
                                        <li class="divider"></li>
                                        <li><a href="renewdomain.html"><img src="img/renewdomain.png" alt="renewdomain"/> Renew Domain</a></li>
                                        <li class="divider"></li>
                                        <li><a href="whoisdomain.html"><img src="img/whoisdomain.png" alt="whoisdomain"/> Whois Domain</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-6 col-md-6">
                                    <img src="img/domainmenu.jpg" class="img-responsive" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown col-md-15 mega-dropdown">
                            <a href="blog.html" class="">Blog</a>
                        </li>
                        <li class="dropdown col-md-15 mega-dropdown">
                            <a href="support.html" class="" >Support</a>
                        </li>
                        <li class="dropdown col-md-15 mega-dropdown">
                            <a href="contactus.html" class="" >Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
        </div>
    </header>
</div>  <div id="body">
    <section class="domainsearch">
        <div class="container">
            <div class="col-md-12">
                <form method="post" class="form-horizontal" action="">
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label class="control-label col-md-4">Find  Perfect Domain Name :</label>
                            <div class="col-sm-8">
                                <input type="text" name="domain" placeholder="Enter Your Domain Name Here..." class="form-control" value="<?php echo $api->domainname; ?>">
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <!--                            <button class="btn btn-info btn-block">Search Domain</button>-->
                            <button type="submit" name="check" class="btn btn-info btn-block">Search Domain!</button>

                        </div>
                    </div>
                </form>




                <!--                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-lg-6 centercol">
                                            <div class="input-group">
                                                <input type="text" name="domain" class="form-control" placeholder="Type Your Domain Name Here ..." value="<?php echo $api->domainname; ?>">
                                                <span class="input-group-btn">        
                                                    <button type="submit" name="check" class="btn btn-default">Go!</button>
                                                </span>
                                            </div> /input-group 
                                        </div> /.col-lg-6 
                                    </div> /.row 
                                </form>-->

                <!--                            </div>
                                        </div> /.container -->

            </div>
            <div class="col-md-12">
                <ul class="list-inline domainlist text-center">
                    <li>
                        <h4><span class="domainname">.com</span>&nbsp;<span class="domainprice"><i class="fa fa-inr"></i>&nbsp;670</span></h4>
                    </li>
                    <li>
                        <h4><span class="domainname">.in</span>&nbsp;<span class="domainprice"><i class="fa fa-inr"></i>&nbsp;270</span></h4>
                    </li>
                    <li>
                        <h4><span class="domainname">.net</span>&nbsp;<span class="domainprice"><i class="fa fa-inr"></i>&nbsp;885</span></h4>
                    </li>
                    <li>
                        <h4><span class="domainname">.asia</span>&nbsp;<span class="domainprice"><i class="fa fa-inr"></i>&nbsp;365</span></h4>
                    </li>
                    <li>
                        <h4><span class="domainname">.org</span>&nbsp;<span class="domainprice"><i class="fa fa-inr"></i>&nbsp;450</span></h4>
                    </li>
                    <li>
                        <p>
                            * All prices per annum
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="demo-1">
                    <div id="large-header" class="large-header">
                        <canvas id="demo-canvas"></canvas>
                        <!-- Third Slide -->
                        <div class="item active slide1" >
                            <!-- Slide Background -->
                            <div class="bs-slider-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <!-- Slide Text Layer -->
                                    <div class="slide-text slide_style_left">
                                        <h1 data-animation="animated zoomInRight">We will provide!</h1>
                                        <h2 data-animation="animated zoomInRight">Services that you need!</h2>
                                        <p data-animation="animated fadeInLeft">It's good to create something great.</p>
                                    </div>
                                    <div class="slide-text slide_style_right">
                                        <img src="img/slider/bannerservice.png" data-animation="animated zoomIn"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Slide -->
                        <!-- Second Slide -->
                        <div class="item">
                            <!-- Slide Background -->
                            <!--  <img src="img/sliderbg.png" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                            <div class="bs-slider-overlay"></div>
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_center">
                                <h1 data-animation="animated flipInX">We provide services for</h1>
                                <p data-animation="animated lightSpeedIn">Almost all Industries</p>
                                <ul class="list-inline">
                                    <li data-animation="animated fadeInUp"><img src="img/slider/hospital.png" /></li>
                                    <li data-animation="animated fadeInDown"><img src="img/slider/realestate.png" /></li>
                                    <li data-animation="animated fadeInUp"><img src="img/slider/industry.png" /></li>
                                    <li data-animation="animated fadeInDown"><img src="img/slider/hospital.png" /></li>
                                    <li data-animation="animated fadeInUp"><img src="img/slider/realestate.png" /></li>
                                    <li data-animation="animated fadeInDown"><img src="img/slider/industry.png" /></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Slide -->
                        <!-- Third Slide -->
                        <div class="item slide3">
                            <!-- Slide Background -->

                            <div class="bs-slider-overlay"></div>
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <img src="img/slider/analysis.png" data-animation="animated fadeInUp"/>
                            </div>
                            <div class="slide-text slide_style_right">
                                <h1 data-animation="animated zoomInLeft">Digital Marketing</h1>
                                <h2 data-animation="animated fadeInRight">Startup to Enterprise Level Solution</h2>
                            </div>
                        </div>
                        <!-- End of Slide -->
                    </div>
                </div>
                <!-- /container -->
            </div>
            <!-- End of Wrapper For Slides -->
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End  bootstrap-touch-slider Slider -->
    </section>
    <div class="m-50"></div>
    <section>
        <div class="container section-padding">
            <div class="section-header text-center">
                <h1 class="h-bold started">LET'S GET STARTED</h1>
                <span class="line text-center"></span>
                <p>Zero Gravity Webservices LLP provides perfect solutions for web development and mobile app development. We focus on the following areas:</p>
            </div>
            <div class="row">
                <div class="preferences clearfix text-center">
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-webdesign.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">Web Design</h3>
                            <p><span class="pref-desc">Web Design &amp; Development Services with Unbeatable Cost By Experienced Developer.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-webdevelop.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">Web Development</h3>
                            <p><span class="pref-desc"> Web Application Development Services for small to big brands with assurance of high ROI &amp; 100% client satisfaction.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-mobileapp.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">Mobile App</h3>
                            <p><span class="pref-desc">A mobile app is a software application designed to run on mobile devices such as Smartphones, Tablet, Computers.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-ecommerce.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">E-commerce</h3>
                            <p><span class="pref-desc">It is a transaction of buying or selling online.Everything you need to know about doing business on the Internet.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-seo.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">SEO</h3>
                            <p><span class="pref-desc">Search engine optimization (SEO) is the process of affecting the visibility of a website or a web page in a web search engine's unpaid results.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-hosting.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">Hosting</h3>
                            <p><span class="pref-desc">It is a type of Internet hosting service that allows individuals and organizations to make their website accessible via the 'WWW'.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-domain.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">Domain</h3>
                            <p><span class="pref-desc">Get over $100 worth of Free Services with every Domain you Register.Receive 2 personalized Email Addresses with free fraud, spam and virus protection.</span></p>
                        </div>
                    </div>
                    <div class="no-p col-md-3 col-sm-6">
                        <div class="biz-block">
                            <figure class="pref-image">
                                <img src="img/home-marketing.png" alt="" class="img-responsive" />
                            </figure>
                            <h3 class="pref-title">Digital Marketing</h3>
                            <p><span class="pref-desc">We are providing promotion of products or brands via one or more forms of electronic media such as email marketing, SMS markeing &amp; Social media.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div id="wrap" class="wrap">
                    <div class="mockup">
                        <img class="mockup__img" src="img/portfolio/mockup4.jpg" />
                        <div class="mobile">
                            <ul id="slideshow-1" class="slideshow">
                                <li class="slideshow__item"><img src="img/portfolio/small/1.png"/></li>
                                <li class="slideshow__item"><img src="img/portfolio/small/2.png"/></li>
                                <li class="slideshow__item"><img src="img/portfolio/small/3.png"/></li>
                                <li class="slideshow__item"><img src="img/portfolio/small/4.png"/></li>
                            </ul>
                        </div>
                        <div class="screen">
                            <ul id="slideshow-2" class="slideshow">
                                <li class="slideshow__item current"><img src="img/portfolio/large/1.png"/></li>
                                <li class="slideshow__item"><img src="img/portfolio/large/2.png"/></li>
                                <li class="slideshow__item"><img src="img/portfolio/large/3.png"/></li>
                                <li class="slideshow__item"><img src="img/portfolio/large/4.png"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h1 class="work">Our Work</h1>
                        <h2 class="yellow"><b>Ideas that change <br>perspectives, forever.</b></h2>
                        <!--  <h4>We strive to deliver the best work for every single project. Here's a few of them we'd like you to see.</h4> -->
                        <br/>
                        <!-- <button class="btn btn-primary hvr-shutter-out-horizontal">View More >> </button> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container section-padding">
            <div class="section-header text-center">
                <h1 class="h-bold testimonial">Our Testimonial</h1>
                <span class="line text-center"></span>
                <p>96.5% of our clients would recommend our services to others. Find out what their testimonials say:</p>
            </div>
            <div class="row">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/testi1.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="img/testi2.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="img/testi1.jpg" alt="">
                            </li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="footer">
    <footer>
        <div class="container-fluid footer-part-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Who we are</h4>
                        <div class="footer-title-separator"></div>
                        <ul class="visitnow">
                            <li><a href="aboutus-2.html">About Us</a></li>
                            <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="blog-2.html">Blog</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Visit Now</h4>
                        <div class="footer-title-separator"></div>
                        <ul class="visitnow">
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Annoucements</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">SLA</a></li>
                            <li><a href="#">Website Migration</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Quick Links</h4>
                        <div class="footer-title-separator"></div>
                        <ul class="visitnow">
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Helpdesk</a></li>
                            <li><a href="#">Terms & Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Hire Us</h4>
                        <div class="footer-title-separator"></div>
                        <ul class="visitnow">
                            <li><a href="#">Hire Dedicated Developers</a></li>
                            <li><a href="#">Hire iPhone App Developer</a></li>
                            <li><a href="#">Hire Android App Developer</a></li>
                            <li><a href="#">Hire PHP Developer</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="footer-hr" />
                <div class="row">
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="img/india.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">INDIA</h4>
                                <address>
                                    2<sup>nd</sup> Floor, Satyam complex,<br>
                                    Jawahar Chowk,Maninagar.<br>
                                    Ahmedabad - 380008.
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="img/usa.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">USA</h4>
                                <address>
                                    Coming Soon<br>
                                    Coming Soon.<br>
                                    USA
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="img/phone.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Phone</h4>
                                <p>+91 - 8401791999</p>
                                <p>+1 - 7325097440</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="img/email.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Email</h4>
                                <p>info@zerogravityweb.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid black-bg footer-part-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>
                            Copyright &copy; 2017 <a href="index-2.html">Zero Gravity</a> | All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline pull-right social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li>/</li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li>/</li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </footer>
</div>
<!-- The scroll to top feature -->
<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
        <i class="fa fa-2x fa-chevron-up"></i>
    </span>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.funnyText.js"></script>

<!--<script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script src="js/TweenLite.min.js"></script>
<script src="js/EasePack.min.js"></script>
<script src="js/rAF.js"></script>
<script src="js/demo-1.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>
<!--<script type="text/javascript" src="js/zeroGravity.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.sticky.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("form").submit(function (event) {
            event.preventDefault();
            var data = $('form').serialize();

            $.ajax({
                url: 'index.php',
                data: data,
                type: 'post',
                dataType: 'json',
                success: function (output) {
                    $.each(output.a, function (i, val) {
                        $('#d').append('<tr class="apnd"><td id="dname">' + val + '</td><td id="dname">' + output.b[i] + '</td></tr>');
                    });
//             
                    $('#myModal').modal('show');
                },
                error: function (output) {
                    alert('Error');
                }

            });
        });
    });
</script>
</body>
<!-- Mirrored from zerogravityweb.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2017 11:58:32 GMT -->
</html>

