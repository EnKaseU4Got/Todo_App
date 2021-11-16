

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Delete <?php echo e($todo->title); ?></div>

                <h5 class="card-header">

                    <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-sm bt-outline-primary"><i class="fa fa-arrow-left"></i>Go Back</a>

                </h5>

                <div class="card-body">

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('todo.destroy', $todo->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <h4 class="text-center">
                                    Are you sure you want to delete <?php echo e($todo->delete); ?>?
                                </h4>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    Yes
                                </button>
                                <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-info">No</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\deadl\laravel-todo-app\resources\views/delete_todo.blade.php ENDPATH**/ ?>