<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;


class UserController  extends BaseController
{
    public function index()

    {

        $user = User::all();

   
          $this->render('admin\user.user-list', compact('user'));



        //print_r($page);die;

    
        //  var_dump($user);die;
     
    }

    public function addUser()
    {

        $this->render('admin\user.user-add');
    }
    public function saveUser()
    {
        $error = [];
        if(empty($_POST['name'])  || empty($_POST['password']) || empty($_POST['email'])  ){

            $error['required'] = 'Vui lòng nhập Đủ các trường!';
        
        }
        if(User::where('name',$_POST['name'] )->count() > 0){
            $error['Name_required'] = 'Name đã tồn tại !';
        }

        if(!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $_POST['email'] )){
            $error['Email_required'] = 'Email sai định dạng !';
        }

        if(empty($_FILES['avatar']['name']) ){
            $error['File_required'] = 'Vui lòng thêm ảnh !';
        }
        


        if (empty($error)) {
        $user = new User();
        $user->fill($_POST);
        $file =  $_FILES['avatar'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $user['avatar'] = $avatar;
        }
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);


        if ($user->save() == false) {

            $_SESSION['status'] = 'Add failed!';
            $_SESSION['status_code'] = 'error';
            header('location: '.BASE_URL.'admin/user');
        } else {
            $_SESSION['status'] = 'Successfully added!';
            $_SESSION['status_code'] = 'success';
            header('location: '.BASE_URL.'admin/user');
        }
    }
        else{
    $this->render('admin\user.user-add' ,compact('error'));}
    }
    public function editUser($id)
    {
        
        $user = User::find($id);
        if ($user) {
            $this->render('admin\user.user-edit', compact('user'));
        } else {
            header('location: '.BASE_URL.'admin/user');
        }
    }
    public function saveEditUser( $id)
    {
       
        $user = User::find($id);
        if (!$user) {
            header('location: '.BASE_URL.'admin/user');
            die;
        }
        $user->fill($_POST);

        $file =  $_FILES['avatar'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $user['avatar'] = $avatar;
        }
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        
        if ($user->save() == false) {
            $_SESSION['status'] = 'Repair failed!';
            $_SESSION['status_code'] = 'error';
            header('location: '.BASE_URL.'admin/user');
        } else {
            $_SESSION['status'] = 'Repaired successfully!';
            $_SESSION['status_code'] = 'success';
            header('location: '.BASE_URL.'admin/user');
        }
    }
    public function deleteUser($id)
    {
        
        $user = User::find($id);
        if (!$user) {
            header('location: '.BASE_URL.'admin/user');
            die;
        }
        $user->delete();
        header('location:'.BASE_URL.'admin/user');
    }
}
