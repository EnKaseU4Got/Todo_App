<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <h5 class="card-header">

                    <a href="<?php echo e(route('todo.create')); ?>" class="btn btn-sm bt-outline-primary">Add Item</a>

                </h5>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-hover table-borderless">

                        <thead>

                            <th scope="col">Item</th>
                            <th scope="col"></th>
                        </thead>

                        <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <?php if($todo->completed): ?>
                                    <td><a href="<?php echo e(route('todo.edit', $todo->id)); ?>" style="color: black"><s><?php echo e($todo->title); ?></s></a></td>
                                <?php else: ?>
                                    <td><a href="<?php echo e(route('todo.edit', $todo->id)); ?>" style="color: black"><?php echo e($todo->title); ?></a></td>
                                <?php endif; ?>

                                
                                <td>
                                    <a href="<?php echo e(route('todo.edit', $todo->id)); ?>" class="btn btn-sm btn-outline-success"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo e(route('todo.show', $todo->id)); ?>" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td>No Item!</td>
                            </tr>
                            <?php endif; ?>
                        
                        </tbody>

                    </table>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\deadl\laravel-todo-app\resources\views/home.blade.php ENDPATH**/ ?>