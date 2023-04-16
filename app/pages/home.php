<?php include '../app/pages/includes/header.php'; ?>

        <!-- Blog -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                        <?php include '../app/pages/includes/post-card.php'; ?>

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



<?php include '../app/pages/includes/footer.php'; ?>