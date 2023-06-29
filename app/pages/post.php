
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
        <section class="bg-half d-table w-100" style="background: url('images/home/bg-pages.jpg')center center;">
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
                                <li><a href="page-blog.html" class="text-dark">Blog</a></li> 
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
                            <img src="images/blog/single-1.jpg" class="img-fluid rounded d-block" alt="">
                            <img src="images/blog/06.jpg" class="img-fluid rounded mt-4" alt="">
                        </div>
                    </div>
                    <!-- BLog Start -->
                    <div class="col-lg-7 col-md-8 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="content p-4">
                                <h6 class="font-weight-normal"><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)" class="text-primary">Photography</a></h6>
                                <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>
                                <blockquote class="blockquote mt-3 p-3">
                                    <p class="text-muted mb-0 font-italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                </blockquote>
                                <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                                <div class="post-meta mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item float-right">
                                            <ul class="list-unstyled">
                                                <li class="list-inline-item">Share :</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline me-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-2 comment-area ">
                            <div class="p-4 shadow rounded">
                                <h5 class="page-title pb-3">Comments :</h5>
                                <ul class="media-list list-unstyled mb-0">
                                    <li class="d-flex mt-4">
                                        <a class="float-left pe-3 mt-2" href="#">
                                            <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/01.jpg" alt="img">
                                        </a>

                                        <div class="flex-1">
                                            <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                            <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Lorenzo Peterson</a></h6>
                                            <small class="text-muted">26th April, 2020 at 01:25 pm</small>
                                            <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                        </div>
                                    </li>

                                    <li class="d-flex mt-4">
                                        <a class="float-left pe-3 mt-2" href="#">
                                            <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/02.jpg" alt="img">
                                        </a>

                                        <div class="flex-1">
                                            <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                            <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Tammy Camacho</a></h6>
                                            <small class="text-muted">26th April, 2020 at 03:55 pm</small>
                                            <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                        </div>
                                    </li>

                                    <li class="d-flex mt-4">
                                        <a class="float-left pe-3 mt-2" href="#">
                                            <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/03.jpg" alt="img">
                                        </a>

                                        <div class="flex-1">
                                            <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                            <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Eleanor Crisp</a></h6>
                                            <small class="text-muted">26th April, 2020 at 05:44 pm</small>
                                            <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                            
                                            <div class="d-flex sub_media mt-4">
                                                <a class="float-left pe-3" href="#">
                                                    <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/04.jpg" alt="img">
                                                </a>
                                                <div class="flex-1">
                                                    <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                    <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Richard Combs</a></h6>
                                                    <small class="text-muted">26th April, 2020 at 06:14 am</small>
                                                    <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <div class="p-4 shadow rounded">
                                <h5 class="page-title pb-3">Leave A Comment :</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control border rounded" required=""></textarea>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="name" name="name" type="text" placeholder="Name" class="form-control border rounded" required="">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="email" type="email" placeholder="Email" name="email" class="form-control border rounded" required="">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="send">
                                            <button type="submit" class="btn btn-primary rounded">Send comment</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
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