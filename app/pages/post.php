
<?php include '../app/pages/includes/header.php'; ?>

<?php  
 
          $slug = $url[1] ?? null;

          if($slug)
          {
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
            $row = query_row($query, ['slug'=>$slug]);
            
          }

          if(!empty($row))
          { ?>

        <!-- Home Start -->
        <section class="bg-half d-table w-100" style="background: url('<?=ROOT?>/assets/images/home/bg-pages.jpg')center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"><?=esc($row['title'])?></h4>
                            <ul class="list-unstyled mt-3">
                                <li class="list-inline-item me-3"><i class="mdi mdi-tag-outline me-1"></i><a href="javascript:void(0)" class="text-muted"><?=esc($row['category'] ?? 'Unknown')?></a></li>
                                <li class="list-inline-item me-3"><i class="mdi mdi-account-heart me-1"></i><a href="javascript:void(0)" class="text-muted">Cristino Murphy</a></li>
                                <li class="list-inline-item"><i class="mdi mdi-calendar-edit me-1"></i><span class="text-muted"><?=date("jS M, Y",strtotime($row['date']))?></span> </li>
                            </ul>
                            <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                                <li><a href="<?=ROOT?>" class="text-dark">Home</a></li>
                                <li><a href="<?=ROOT?>/blog" class="text-dark">Blog</a></li> 
                                <li>
                                    <span class="text-primary"> Blog Detail</span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->

        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4">
                        <div class="sticky-sidebar">
                            <!-- <img src="images/blog/single-1.jpg" class="img-fluid rounded d-block" alt=""> -->
                            <img src="<?=get_image($row['image'])?>" class="img-fluid rounded mt-4" alt="">
                        </div>
                    </div>
                    <!-- BLog Start -->
                    <div class="col-lg-7 col-md-8 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="content p-4">
                                <h6 class="font-weight-normal"><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)" class="text-primary"><?=esc($row['category'] ?? 'Unknown')?></a></h6>
                                <p class="text-muted mt-3"><?=nl2br(add_root_to_images($row['content']))?></p>
                            </div>
                        </div>

                    </div>
                    <!-- BLog End -->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- Blog -->

        <?php 
          }else{
            echo "No items found!";
          }

        ?>
        <?php include '../app/pages/includes/footer.php'; ?>