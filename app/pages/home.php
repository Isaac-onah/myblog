
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from shreethemes.in/cristino/layouts/page-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 12:19:56 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Cristino - Personal Portfolio Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Bootstrap 5, premium, marketing, multipurpose" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="<?=ROOT?>/assets/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Icon -->
        <link href="<?=ROOT?>/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom Css -->
        <link href="<?=ROOT?>/assets/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="<?=ROOT?>/assets/css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="<?=ROOT?>/assets/images/logo.png" height="20" class="d-block mx-auto" alt="">
                </div>
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar Start -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?=ROOT?>/assets/images/logo.png" class="logo-light-mode" alt="">
                    <img src="<?=ROOT?>/assets/images/logo-light.png" class="logo-dark-mode" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span data-feather="menu" class="fea icon-md"></span>
                </button><!--end button-->

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul id="navbar-navlist" class="navbar-nav navbar-nav-link mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Blog</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li><!--end nav item-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
                            </a>
                            <div class="dropdown-menu rounded m-0" aria-labelledby="navbarDropdown">
                                <div class="container mx-0 mx-md-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="dropdown-item" href="page-blog.html">Blog</a>
                                            <a class="dropdown-item" href="page-blog-detail.html">Blog Detail</a>
                                            <a class="dropdown-item" href="page-portfolio.html">Portfolio</a>
                                            <a class="dropdown-item" href="page-portfolio-detail.html">Portfolio Detail</a>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end container-->
                            </div>
                        </li><!--end nav item-->
                    </ul>

                    <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon">
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div> 
            </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->

        <!-- Home Start -->
        <section class="bg-half d-table w-100" style="background: url('<?=ROOT?>/assets/images/home/bg-pages.jpg')center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Latest News or Blog </h4>
                            <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                                <li><a href="index-2.html" class="text-dark">Cristino</a></li>
                                <li>
                                    <span class="text-primary"> Blog</span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Home End -->

        <!-- Blog -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/01.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a> </h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/02.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/03.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Three Reasons Visibility Matters in Supply Chain</a></h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/04.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a> </h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/05.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/06.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Three Reasons Visibility Matters in Supply Chain</a></h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/07.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a> </h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->
        
                            <div class="col-lg-6 col-12 mb-4 pb-2">
                                <div class="blog-post rounded shadow">
                                    <img src="<?=ROOT?>/assets/images/blog/08.jpg" class="img-fluid rounded-top" alt="">
                                    <div class="content pt-4 pb-4 p-3">
                                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                                        </ul>
                                    </div><!--end content-->
                                </div><!--end blog post-->
                            </div><!--end col-->

                            <!-- PAGINATION START -->
                            <div class="col-12">                                
                                <ul class="pagination justify-content-center mb-0 list-unstyled">
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2"> Previous</a></li>
                                    <li class="active"><a href="#" class="pe-3 ps-3 pt-2 pb-2">1</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2">2</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2">3</a></li>
                                    <li><a href="#" class="pe-3 ps-3 pt-2 pb-2">Next </a></li>
                                </ul><!--end pagination-->
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div><!--end col-->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="sidebar sticky-sidebar">
                            <!-- Author -->
                            <div class="widget">
                                <div class="p-4 rounded shadow">
                                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Author</h6>
                                    <div class="text-center author mt-4">
                                        <img src="<?=ROOT?>/assets/images/home/hero.jpg" class="avatar avatar-md shadow border mx-auto rounded-circle" alt="">
                                        <div class="mt-4">
                                            <h6>Cristino Murphy</h6>
                                            <small>Web Designer</small>
                                            <ul class="list-unstyled social-icon social mt-4 mb-0">
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-vimeo"></i></a></li>
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Author -->

                            <!-- SEARCH -->
                            <div class="widget mt-4 pt-2">
                                <div class="p-4 rounded shadow">
                                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Search</h6>
                                    <div id="search2" class="widget-search mt-4 mb-0">
                                        <form role="search" method="get" id="searchform" class="searchform">
                                            <div>
                                                <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->

                            <!-- CATAGORIES -->
                            <div class="widget mt-4 pt-2">
                                <div class="p-4 rounded shadow">
                                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Catagories</h6>
                                    <ul class="list-unstyled mt-4 mb-0 catagories">
                                        <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Finance</a> <span>13</span></li>
                                        <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Business</a> <span>09</span></li>
                                        <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Blog</a> <span>18</span></li>
                                        <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Corporate</a> <span>20</span></li>
                                        <li class="d-flex justify-content-between"><a href="jvascript:void(0)">Investment</a> <span>22</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- CATAGORIES -->

                            <!-- RECENT POST -->
                            <div class="widget mt-4 pt-2">
                                <div class="p-4 rounded shadow">
                                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
                                    <div class="mt-4">
                                        <div class="clearfix d-flex align-items-center post-recent">
                                            <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="<?=ROOT?>/assets/images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content"><a href="jvascript:void(0)">Consultant Business</a><span class="text-muted">15th April, 2020</span></div>
                                        </div>
                                        <div class="clearfix d-flex align-items-center post-recent">
                                            <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="<?=ROOT?>/assets/images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content"><a href="jvascript:void(0)">Look On The Glorious Balance</a> <span class="text-muted">15th April, 2020</span></div>
                                        </div>
                                        <div class="clearfix d-flex align-items-center post-recent">
                                            <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="<?=ROOT?>/assets/images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content"><a href="jvascript:void(0)">Research Financial.</a> <span class="text-muted">15th April, 2020</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- RECENT POST -->

                            <!-- TAG CLOUDS -->
                            <div class="widget mt-4 pt-2 text-center">
                                <div class="p-4 rounded shadow">
                                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded">Tags Cloud</h6>
                                    <div class="tagcloud mt-4">
                                        <a href="jvascript:void(0)" class="rounded">Business</a>
                                        <a href="jvascript:void(0)" class="rounded">Finance</a>
                                        <a href="jvascript:void(0)" class="rounded">Marketing</a>
                                        <a href="jvascript:void(0)" class="rounded">Fashion</a>
                                        <a href="jvascript:void(0)" class="rounded">Bride</a>
                                        <a href="jvascript:void(0)" class="rounded">Lifestyle</a>
                                        <a href="jvascript:void(0)" class="rounded">Travel</a>
                                        <a href="jvascript:void(0)" class="rounded">Beauty</a>
                                        <a href="jvascript:void(0)" class="rounded">Video</a>
                                        <a href="jvascript:void(0)" class="rounded">Audio</a>
                                    </div>
                                </div>
                            </div>
                            <!-- TAG CLOUDS -->
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- Blog -->

        <!-- Footer Start -->
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="#"><img src="images/logo-light.png" alt=""></a>
                        <p class="para-desc mx-auto mt-5">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar bg-dark">
            <div class="container text-foot text-center">
                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Cristino. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->
        
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="<?=ROOT?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=ROOT?>/assets/js/gumshoe.js"></script>
        <!-- Feather icon -->
        <script src="<?=ROOT?>/assets/js/feather.min.js"></script>
        <!-- Switcher -->
        <script src="<?=ROOT?>/assets/js/switcher.js"></script>
        <!-- Main Js -->
        <script src="<?=ROOT?>/assets/js/app.js"></script>
    </body>


<!-- Mirrored from shreethemes.in/cristino/layouts/page-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 12:20:12 GMT -->
</html>