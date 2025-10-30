<?php $__env->startSection('content'); ?>
    <h2>ویرایش کاربر</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($err); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('users.update', $user['id'])); ?>" method="POST" class="bg-white p-3 border rounded">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">نام</label>
            <input type="text" name="name" value="<?php echo e(old('name', $user['name'])); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="email" name="email" value="<?php echo e(old('email', $user['email'])); ?>" class="form-control" required>
        </div>

        <button class="btn btn-primary" type="submit">به‌روزرسانی</button>
        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">انصراف</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\LaravelProjects\project-web\resources\views/users/edit.blade.php ENDPATH**/ ?>