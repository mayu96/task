<?php $__env->startSection('content'); ?>

<form action="<?php echo e('/store'); ?>" method="post">
<?php echo csrf_field(); ?>
    <div class="col-md-6">
        <textarea name="name" type="text" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div> 
    <div class="col-auto my-1">   
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
</form>

<?php $__currentLoopData = $objectives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $objective): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card-deck">
  <div class="card">    
    <div class="card-body">
      <h5 class="card-title"><?php echo e($objective->title); ?></h5>
      <a href="<?php echo e(url('/detail/'. $objective->id)); ?>" class="card-link">詳細</a>      
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 

<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6 p-3">
    <input value="<?php echo e($task->name); ?>" type="text" id="disabledTextInput" class="form-control">
    <a href="<?php echo e(url('/delete/'. $task->id)); ?>" class="btn btn-sm btn-info">削除</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/task/resources/views/index.blade.php ENDPATH**/ ?>