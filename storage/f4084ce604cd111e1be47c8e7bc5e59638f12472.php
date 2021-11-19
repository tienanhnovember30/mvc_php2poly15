

<?php $__env->startSection('title' , 'Trang Chính'); ?>
<?php $__env->startSection('content'); ?>
<div class="wiTDet-program-bg">
    <div class="container-fluid">
        <div class="row row-admin d-flex justify-content-center" >
            <a href="<?php echo e(BASE_URL.'admin/user'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Tài Khoản</h3>
                            <p class="text-big font-light">
                                <?php echo e($user); ?>

                            </p>
                            <small>
                            Thêm Sửa Xoá Tài Khoản Người Dùng
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo e(BASE_URL.'admin/product'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Sản Phẩm</h3>
                            <p class="text-big font-light">
                                <?php echo e($product); ?>

                            </p>
                            <small>
                            Thêm Sửa Xoá Sản Phẩm
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo e(BASE_URL.'admin/cate'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Loại Sản phẩm</h3>
                            <p class="text-big font-light">
                                <?php echo e($cate); ?>

                            </p>
                            <small>
                               Thêm Sửa Xoá Loại Sản Phẩm
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    
            
            
        </div>
       
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\asm\mvc\app\views/admin/home.blade.php ENDPATH**/ ?>