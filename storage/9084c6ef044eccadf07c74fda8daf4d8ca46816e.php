



<?php $__env->startSection('title' , 'Categories'); ?>
<?php $__env->startSection('content'); ?>
<div class="add-product">
    <a href="<?php echo e(BASE_URL); ?>admin/cate/add">Thêm Mới</a>
</div>
<table>
    <tr>
        <th>STT</th>
        <th>Tên Loại</th>
        <th>Ảnh Đại Diện Loại</th>
        <th>Chi Tiết Loại</th>
        <th>Tổng Sản Phẩm</th>     
        <th>Hành Động</th>
    </tr>
    <?php
        $stt = 1;
    ?>
<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <tr>
        <td> <?php echo e($stt++); ?> </td>
        <td> <?php echo e($item->cate_name); ?> </td>
        <td><img width="50px" src="<?php echo e(PUBLIC_URL.$item->cate_avatar); ?>" alt="" /> </td>
  
        <td> <?php echo e($item->type_detail); ?> </td>
        <td> <?php echo e(count($item->products)); ?> </td>
      
       
        <td>
       <a href="<?php echo e(BASE_URL); ?>admin/cate/edit/<?php echo e($item->id); ?>"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
       <a class="btn-del"  href="<?php echo e(BASE_URL); ?>admin/cate/<?php echo e($item->id); ?>" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm\mvc\app\views/admin\category/cate-list.blade.php ENDPATH**/ ?>