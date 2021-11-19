<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;


class CateController  extends BaseController
{
    public function index()

    {
        $cate = Category::all();
     


        $this->render('admin\category.cate-list', compact('cate'));
    }

    public function addCate()
    {

        $this->render('admin\category.cate-add');
    }
    public function saveCate()
    {   
        
        $cate = new Category();
     
  
        $error = [];
  
        if(empty($_POST['type_detail']) || empty($_POST['cate_name'])  ){
        $error['required'] = 'Vui lòng nhập Đủ các trường!';
       

        }
        
        if(empty($_FILES['cate_avatar']['name']) ){
            $error['File_required'] = 'Vui lòng thêm ảnh !';
        }
        if(Category::where('cate_name',$_POST['cate_name'] )->count() > 0){
            $error['Name_required'] = 'Name đã tồn tại !';
        }

        if (empty($error)) {
        
        $cate->fill($_POST);
        $file =  $_FILES['cate_avatar'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $cate['cate_avatar'] = $avatar;
        }

        if ($cate->save() == false) {
            $_SESSION['status'] = 'Add failed!';
            $_SESSION['status_code'] = 'error';
            header('location: '.BASE_URL.'admin/cate');
        } else {
            $_SESSION['status'] = 'Successfully added!';
            $_SESSION['status_code'] = 'success';
           

            header('location:'.BASE_URL.'admin/cate');
        }
        
        }else{
             $this->render('admin\category.cate-add' ,compact('error'));
        }
       
        
      


     
    }
    public function editCate($id)
    {
       
        $cate = Category::find($id);
        if ($cate) {
            $this->render('admin\category.cate-edit', compact('cate'));
        } else {
            header('location:'.BASE_URL.'admin/cate');
        }
    }
    public function saveEditCate($id)
    {
        
        $cate = Category::find($id);
        if (!$cate) {
            header('location: '.BASE_URL.'admin/cate');
            die;
        }
        $cate->fill($_POST);

        $file =  $_FILES['cate_avatar'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $cate['cate_avatar'] = $avatar;
        }

        if ($cate->save() == false) {
            $_SESSION['status'] = 'Repair failed!';
            $_SESSION['status_code'] = 'error';
            header('location: '.BASE_URL.'admin/cate');
        } else {
            $_SESSION['status'] = 'Repaired successfully!';
            $_SESSION['status_code'] = 'success';
            header('location:'.BASE_URL.'admin/cate');
        }
    }
    public function deleteCate($id)
    {
        
        $cate = Category::find($id);
        if (!$cate) {
            header('location: '.BASE_URL.'admin/cate');
            die;
        }
        $cate->delete();
        header('location: '.BASE_URL.'admin/cate');
    }
}
