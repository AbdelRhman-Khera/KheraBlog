<!doctype html>
<html>
<a  id="tbutton"></a>


</script>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
	<a  id="tbutton"></a>



<div class="container">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</div>

<div class="container">

    <?php echo $__env->yieldContent('content'); ?>


    </div>



    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>








</body>
</html>


<?php /**PATH D:\work\kherablog\resources\views/layouts/master.blade.php ENDPATH**/ ?>