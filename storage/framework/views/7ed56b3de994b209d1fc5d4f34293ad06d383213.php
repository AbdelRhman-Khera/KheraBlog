<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
    <div class="carousel-inner">
<?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('/public/storage/'.$c->img)); ?>" class="d-block w-100" alt="<?php echo e($c->desc); ?>" width="1200" height="600">
        <div class="container">
          <div class="carousel-caption text-category text-rights">
            <h5><?php echo e($c->desc); ?> </h5>

            <p><a class="btn btn-lg btn-info" href=" <?php echo e(route('gallery')); ?>" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php /**PATH D:\work\kherablog\resources\views/layouts/carousel1.blade.php ENDPATH**/ ?>