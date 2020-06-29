<?php $__env->startSection('title', 'task'); ?>

<?php $__env->startSection('content'); ?>



  <h2>現在のタスク</h2>

  <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <p><?php echo e($task->name); ?></p>




  <form method="POST" action="<?php echo e('/task'); ?>">
  <?php echo csrf_field(); ?>
  <?php echo e(method_field('DELETE')); ?>

      <button type="submit" value="delete" class="btn btn-danger">削除</button>

  </form>


 



  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/task/resources/views/task.blade.php ENDPATH**/ ?>