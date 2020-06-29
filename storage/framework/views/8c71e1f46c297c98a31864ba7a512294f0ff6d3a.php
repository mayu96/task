<?php $__env->startSection('content'); ?>

    <!-- Bootstrapの定形コード… -->

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        <?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- 新タスクフォーム -->
        <form action="<?php echo e(url('task')); ?>" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>


            <!-- タスク名 -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">タスク</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- タスク追加ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> タスク追加
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: 現在のタスク -->
    <?php if(count($tasks) > 0): ?>
        <div class="panel panel-dafault">
            <div class="panel-heading">現在のタスク</div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                 
                 <!-- テーブルヘッダ -->
                 <thead>
                    <th>Task</tn>
                    <th>&nbsp;</tn>
                 </thead>
                 <!-- テーブル本体 -->
                 <tbody>
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="table-text">
                                <div><?php echo e($task->name); ?></div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                 </tbody>
                </table>
            </div>
            </div>
    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/task/resources/views/tasks.blade.php ENDPATH**/ ?>