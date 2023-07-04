<?php include '../app/pages/includes/header.php'; ?>

<!-- Blog -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="row">
                    <?php

                    $query = "select posts.*, categories.category, users.username from posts join categories on posts.category_id = categories.id join users on posts.user_id = users.id order by id desc limit 6";
                    $rows = query($query);
                    if ($rows) {
                        foreach ($rows as $row) {
                            include '../app/pages/includes/post-card.php';
                        }
                    } else {
                        echo "No items found!";
                    }

                    ?>

                    <!-- PAGINATION START -->
                    <div class="col-12">
                        <ul class="pagination justify-content-end mb-0 list-unstyled">
                            <li><a href="<?= ROOT ?>/blog" class="pe-3 ps-3 pt-2 pb-2 ms-5 ">View All Blogs </a></li>
                        </ul><!--end pagination-->
                    </div><!--end col-->
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div><!--end col-->

            <!-- START SIDEBAR -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="sidebar sticky-sidebar">
                    <!-- RECENT POST -->
                    <div class="widget">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
                            <div class="mt-4">
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="<?= ROOT ?>/assets/images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="jvascript:void(0)">Consultant Business</a><span class="text-muted">15th April, 2020</span></div>
                                </div>
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="<?= ROOT ?>/assets/images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="jvascript:void(0)">Look On The Glorious Balance</a> <span class="text-muted">15th April, 2020</span></div>
                                </div>
                                <div class="clearfix d-flex align-items-center post-recent">
                                    <div class="post-recent-thumb"> <a href="jvascript:void(0)"> <img alt="img" src="<?= ROOT ?>/assets/images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content"><a href="jvascript:void(0)">Research Financial.</a> <span class="text-muted">15th April, 2020</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RECENT POST -->

                    <!-- Author -->
                    <div class="widget mt-4  pt-2">
                        <div class="p-4 rounded shadow">
                            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Author</h6>
                            <div class="text-center author mt-4">
                                <img src="<?= ROOT ?>/assets/images/home/hero1.png" class="avatar avatar-md shadow border mx-auto rounded-circle" alt="">
                                <div class="mt-4">
                                    <h6>Isaac Onah</h6>
                                    <small>SoftWare Developer</small>
                                    <ul class="list-unstyled social-icon social mt-4 mb-0">
                                        <li class="list-inline-item"><a href="https://twitter.com/Aiyziq"><i class="mdi mdi-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/isaaconah"><i class="mdi mdi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/aiyzihk/"><i class="mdi mdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Author -->

                    <!-- CATAGORIES -->

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
<!-- Blog Start -->
<section class="section bg-light pb-3" id="news">
    <div class="container pb-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="position-relative">
                        <h4 class="title text-uppercase mb-2">Latest News & Blog</h4>
                        <div>
                            <div class="title-box"></div>
                            <div class="title-line"></div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="blog-post rounded shadow">
                    <img src="<?= ROOT ?>/assets/images/blog/01.jpg" class="img-fluid rounded-top" alt="">
                    <div class="content pt-4 pb-4 p-3">
                        <ul class="list-unstyled d-flex justify-content-between post-meta">
                            <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li>
                            <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>
                        </ul>
                        <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a></h5>
                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                            <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                            <li><i class="mdi mdi-calendar-edit me-1"></i>10th April, 2020</li>
                        </ul>
                    </div><!--end content-->
                </div><!--end blog post-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="blog-post rounded shadow">
                    <img src="<?= ROOT ?>/assets/images/blog/01.jpg" class="img-fluid rounded-top" alt="">
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

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="blog-post rounded shadow">
                    <img src="<?= ROOT ?>/assets/images/blog/01.jpg" class="img-fluid rounded-top" alt="">
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
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog Start -->


<?php include '../app/pages/includes/footer.php'; ?>