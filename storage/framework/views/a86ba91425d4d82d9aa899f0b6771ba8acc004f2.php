<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#"></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="<?php echo e(route('home')); ?>">KHERA BLOG</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <form action="<?php echo e(route('search')); ?>" method="POST" role="search"id="demo-2">
        <?php echo csrf_field(); ?>
          <input type="search" placeholder="Search" name="q">
       </form>

      </div>
    </div>
  </header>
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

      <a class="p-2  text-category"  href="<?php echo e(route('catshow',1)); ?>">Sport</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',2)); ?>">Cinema</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',3)); ?>">Music</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',4)); ?>">TV</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',5)); ?>">Technology</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',6)); ?>">Opinion</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',7)); ?>">Culture</a>
      <a class="p-2  text-category" href="<?php echo e(route('catshow',8)); ?>">Travel</a>
      <a class="btn btn-sml btn-info" href="<?php echo e(route('gallery')); ?>" role="button">Browse gallery</a>



    </nav>
  </div><?php /**PATH D:\work\kherablog\resources\views/layouts/header.blade.php ENDPATH**/ ?>