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
                        <li class="nav-item <?=$url[0] =='home' ? 'link-primary':'link-dark'?>">
                            <a class="nav-link" href="<?=ROOT?>">Home</a>
                        </li><!--end nav item-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catagories
                            </a>
                            <div class="dropdown-menu rounded m-0" aria-labelledby="navbarDropdown">
                                <div class="container mx-0 mx-md-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php  

                                                $query = "select * from categories order by id desc";
                                                $categories = query($query);
                                            ?>
                                            <?php if(!empty($categories)):?>
                                            <?php foreach($categories as $cat):?>
                                                     <a class="dropdown-item" href="<?=ROOT?>/category/<?=$cat['slug']?>"><?=$cat['category']?></a>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end container-->
                            </div>
                            
                        </li><!--end nav item-->
                        <li class="nav-item <?=$url[0] =='home' ? 'link-primary':'link-dark'?>">
                            <a class="nav-link" href="#contact">Contact</a>
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