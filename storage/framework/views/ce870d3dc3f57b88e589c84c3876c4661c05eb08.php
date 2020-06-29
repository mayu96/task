<?php $__env->startSection('content'); ?>

<ul class="list-group list-group-flush">
  <li class="list-group-item"><?php echo e($objective->title); ?></li>
  <li class="list-group-item">内容: <?php echo e($objective->content); ?></li>
  <li class="list-group-item">達成度: <?php echo e($objective->progress); ?></li>
</ul>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/task/resources/views/detail.blade.php ENDPATH**/ ?>