<?php $__env->startSection('content'); ?>

<main role="main" class="container">

  <div class="row">
    <div class="col-md-12 blog-main">


      <div class="blog-post">
      	<img src="<?php echo e(asset('/public/storage/'.$top->post_img)); ?>" class="img-fluid" alt="<?php echo e($top->title); ?>" width="1200" height="600">
        <h2 class="blog-post-title"><?php echo e($top->title); ?></h2>
        <p class="blog-post-meta"><?php echo e($top->created_at->diffForHumans()); ?> </p>
            <?php echo html_entity_decode($top->content); ?>




              </div>

  </div>
</div>




</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\kherablog\resources\views/postpage.blade.php ENDPATH**/ ?>