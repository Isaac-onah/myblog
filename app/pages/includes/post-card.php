<div class="col-lg-6 col-12 mb-4 pb-2">
    <div class="blog-post rounded shadow">
        <img src="<?=get_image($row['image'])?>" class="img-fluid rounded-top w-100" width="200" height="50" alt="">
        <div class="content pt-4 pb-4 p-3">
            <ul class="list-unstyled d-flex justify-content-between post-meta">
                <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark"><?=esc($row['category'] ?? 'Unknown')?></a></li>                                    
            </ul> 
            <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
            <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                <li><a href="<?=ROOT?>/post/<?=$row['slug']?>" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                <li><i class="mdi mdi-calendar-edit me-1"></i><?=date("jS M, Y",strtotime($row['date']))?></li>
            </ul>
        </div><!--end content-->
    </div><!--end blog post-->
</div><!--end col-->