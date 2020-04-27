<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.carousel1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>

   <div class="row mb-2">

    <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <a  href="<?php echo e(route('catshow', $t->category_id)); ?>"class="d-inline-block mb-2 text-category"><?php echo e($t->cats['name'] ?? '-- unset--'); ?></a>
          <a href="<?php echo e(route('postshow', $t)); ?>"><h3 class="mb-0" ><?php echo e($t->title); ?></h3></a>
          <div class="mb-1 text-muted"><?php echo e($t->created_at->diffForHumans()); ?></div>
          <p class="card-text mb-auto"><?php echo e(\Str::words($t->preview, 40)); ?></p>
          <a href="<?php echo e(route('postshow', $t)); ?>" class="stretched-link">كمل قراية</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <a href="<?php echo e(route('postshow', $t)); ?>">
          <img src="<?php echo e(asset('/public/storage/'.$t->prv_img)); ?>" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" ><title>Placeholder</title><rect href="<?php echo e(route('postshow', $t)); ?>" width="100%" height="100%" fill="#55595c"/></img>
        </a>
        </div>


      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <?php echo e($top->links()); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\kherablog\resources\views/index.blade.php ENDPATH**/ ?>