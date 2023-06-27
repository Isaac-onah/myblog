<?php include '../app/pages/includes/header.php'; ?>

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
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- Blog -->




<?php include '../app/pages/includes/footer.php'; ?>