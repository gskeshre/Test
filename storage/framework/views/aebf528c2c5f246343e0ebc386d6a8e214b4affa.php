 
<?php $__env->startSection('content'); ?>

 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('user.create')); ?>"> Create New User</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($use->name); ?></td>
            <td><?php echo e($use->uname); ?></td>
            <td><?php echo e($use->password); ?></td>
            <td>
                 <form action="<?php echo e(route('user.destroy',$use->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('user.show',$use->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('user.edit',$use->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rtdl-001/Sites/demo.dev/webdemo/resources/views/CRUD/index.blade.php ENDPATH**/ ?>