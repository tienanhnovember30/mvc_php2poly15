



<?php $__env->startSection('title' , 'Thêm Tài Khoản'); ?>
<?php $__env->startSection('content'); ?>
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <?php if(isset($error)): ?>
                                            <div class="alert alert-danger" role="alert">
                                                
                                            <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php echo e($item); ?><br>
                                                  
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div> 
                                             
                                              <?php endif; ?>
                                            <form action="" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control" placeholder="Tài khoản của bạn" value="<?php echo e(isset($_POST['name']) ?$_POST['name'] : ""); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" type="email" class="form-control" placeholder="Email của bạn" value="<?php echo e(isset($_POST['email']) ?$_POST['email'] : ""); ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="password" type="text" class="form-control" placeholder="Mật Khẩu của bạn"  value="<?php echo e(isset($_POST['password']) ?$_POST['password'] : ""); ?>">
                                                        </div>

                                           



                                                    
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        
                                                     
                                                        <div class="form-group alert-up-pd">
                                                            <div class="file-upload">
                                                            <button class="file-upload-btn"  type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm Ảnh đại diện</button>
                                                                
                                                            <div class="image-upload-wrap">
                                                              <input class="file-upload-input"  name="avatar"  type="file" onchange="readURL(this);"  />
                                                              
                                                              <div class="drag-text">
                                                                <h3><i class="fas fa-download fa-2x" ></i> <br> Drag and drop a file or select add Image</h3>
                                                              </div>
                                                            </div>
                                                            <div class="file-upload-content">
                                                              <img class="file-upload-image" name="avatar"   type="file" src="" alt="your image" />
                                                              <div class="image-title-wrap">
                                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                             
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"  style="width: 200px; height: 50px; margin-top: 10px;" class="btn btn-primary waves-effect waves-light">Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\user/user-add.blade.php ENDPATH**/ ?>