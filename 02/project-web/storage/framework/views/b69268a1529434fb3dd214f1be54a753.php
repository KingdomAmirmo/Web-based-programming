<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>لیست کاربران</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
            font-family: "Vazirmatn", sans-serif;
            margin: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            border: 1px solid #aaa;
        }

        a, button {
            font-family: inherit;
        }
    </style>
</head>
<body>
<h2>لیست کاربران</h2>
<a href="<?php echo e(route('users.create')); ?>">➕ افزودن کاربر جدید</a>

<?php if(session('success')): ?>
    <p style="color: green"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<table border="1" cellpadding="8">
    <tr>
        <th>شناسه</th>
        <th>نام</th>
        <th>ایمیل</th>
        <th>عملیات</th>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user['id']); ?></td>
            <td><?php echo e($user['name']); ?></td>
            <td><?php echo e($user['email']); ?></td>
            <td>
                <a href="<?php echo e(route('users.edit', $user['id'])); ?>">✏️ ویرایش</a>
                <form action="<?php echo e(route('users.destroy', $user['id'])); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">🗑 حذف</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH F:\LaravelProjects\project-web\resources\views/users/index.blade.php ENDPATH**/ ?>