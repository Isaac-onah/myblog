<?php include '../app/pages/includes/header.php'; ?>

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
                    <div class="col-lg-12 col-md-6">
                        <div class="row">
                            <?php  
                                $limit = 9;
                                $offset = ($PAGE['page_number'] - 1) * $limit;

                                $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit $limit offset $offset";
                                $rows = query($query);
                                if($rows)
                                {
                                    foreach ($rows as $row) {
                                    include '../app/pages/includes/postcard.php';
                                    }

                                }else{
                                    echo "No items found!";
                                }

                            ?>
                        </div><!--end row-->
                           <!-- PAGINATION START -->
                           <div class="col-12">                                
                                <ul class="pagination justify-content-between mb-0 list-unstyled">
                                    <li>
                                        <ul class="pagination justify-content-start mb-0 list-unstyled">
                                            <li><a href="<?=$PAGE['first_link']?>" class="pe-3 ps-3 pt-2 pb-2"> First Page</a></li>
                                            <li><a href="<?=$PAGE['prev_link']?>" class="pe-3 ps-3 pt-2 pb-2"> Previous</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="pagination justify-content-end mb-0 list-unstyled">
                                            <li><a href="<?=$PAGE['next_link']?>" class="pe-3 ps-3 pt-2 pb-2 ms-5 ">Next </a></li>
                                        </ul>
                                    </li>
                                </ul><!--end pagination-->
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- Blog -->




<?php include '../app/pages/includes/footer.php'; ?>