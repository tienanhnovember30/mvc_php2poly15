



<?php $__env->startSection('title' , 'User'); ?>
<?php $__env->startSection('content'); ?>
<div class="add-product">
    <a href="<?php echo e(BASE_URL); ?>admin/user/add">Thêm Mới</a>
</div>
<table>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ảnh Đại Diện</th>
        <th>Email</th>

        <th>Role</th>
       
       
        <th>Hành Động</th>
    </tr>
    <?php
        $stt = 1;
    ?>
<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <tr>
        <td> <?php echo e($stt++); ?> </td>
        <td> <?php echo e($item->name); ?> </td>
        <td><img width="50px" src="<?php echo e(PUBLIC_URL.$item->avatar); ?>" alt="" /> </td>
        <td> <?php echo e($item->email); ?> </td>

        <td> <?php echo e($item->role); ?> </td>
       
       
       
        <td>
       <a href="<?php echo e(BASE_URL); ?>admin/user/edit/<?php echo e($item->id); ?>"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
      <a class="btn-del"  href="<?php echo e(BASE_URL); ?>admin/user/<?php echo e($item->id); ?>" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
        </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm\mvc\app\views/admin\user/user-list.blade.php ENDPATH**/ ?>