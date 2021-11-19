<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="<?php echo e(BASE_URL.'admin'); ?>"><img class="main-logo" src="<?php echo e(THEME_ASSET_URL); ?>img/logo/logo.png" alt="" /></a>
            <strong><a href="<?php echo e(BASE_URL.'admin'); ?>"><img src="<?php echo e(THEME_ASSET_URL); ?>img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">


                    <li class="active" style="margin-top: 50px">
                        <a class="has-arrow" href="<?php echo e(BASE_URL.'admin'); ?>">
                            <i class="fas fa-house-user"></i>
                            <span class="mini-click-non">Trang Chính</span>
                        </a>

                    </li>

                    <li>
                        <a class="has-arrow" href="admin-user" aria-expanded="false"><i class="fas fa-users "></i> <span class="mini-click-non">Tài Khoản</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="<?php echo e(BASE_URL.'admin/user'); ?>"><span class="mini-sub-pro">Danh Sách Tài Khoản</span></a></li>
                            <li><a title="Add Professor" href="<?php echo e(BASE_URL.'admin/user/add'); ?>"><span class="mini-sub-pro">Thêm Tài Khoản</span></a></li>


                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fab fa-dropbox"></i> <span class="mini-click-non">Sản Phẩm</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="<?php echo e(BASE_URL.'admin/product'); ?>"><span class="mini-sub-pro">Danh sách Sản Phẩm</span></a></li>
                            <li><a title="Add Professor" href="<?php echo e(BASE_URL.'admin/product/add'); ?>"><span class="mini-sub-pro">Thêm Sản Phẩm</span></a></li>


                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i class="fas fa-list-alt"></i> <span class="mini-click-non">Loại Sản Phẩm</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="<?php echo e(BASE_URL.'admin/cate'); ?>"><span class="mini-sub-pro">Danh Sách Loại</span></a></li>
                            <li><a title="Add Professor" href="<?php echo e(BASE_URL.'admin/cate/add'); ?>"><span class="mini-sub-pro">Thêm Loại</span></a></li>


                        </ul>
                    </li>




                </ul>
            </nav>
        </div>
    </nav>
</div><?php /**PATH C:\xampp\htdocs\asm\mvc\app\views/admin\layouts/sidebar.blade.php ENDPATH**/ ?>