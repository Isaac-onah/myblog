<?php include '../app/pages/includes/header.php'; ?>
       
        <!-- Blog -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <?php  

                                $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 6";
                                $rows = query($query);
                                if($rows)
                                {
                                    foreach ($rows as $row) {
                                    include '../app/pages/includes/post-card.php';
                                    }

                                }else{
                                    echo "No items found!";
                                }

                            ?>

                            <!-- PAGINATION START -->
                            <div class="col-12">                                
                                <ul class="pagination justify-content-end mb-0 list-unstyled">
                                    <li><a href="<?=ROOT?>/blog" class="pe-3 ps-3 pt-2 pb-2 ms-5 ">View All Blogs </a></li>
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

                            <!-- Author -->
                            <div class="widget mt-4  pt-2">
                                <div class="p-4 rounded shadow">
                                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">Author</h6>
                                    <div class="text-center author mt-4">
                                        <img src="<?=ROOT?>/assets/images/home/hero1.png" class="avatar avatar-md shadow border mx-auto rounded-circle" alt="">
                                        <div class="mt-4">
                                            <h6>Isaac Onah</h6>
                                            <small>SoftWare Developer</small>
                                            <ul class="list-unstyled social-icon social mt-4 mb-0">
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="jvascript:void(0)" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
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



<?php include '../app/pages/includes/footer.php'; ?>