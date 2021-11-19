<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;


class ProductController  extends BaseController
{
    public function index()

    {

        $product = Product::all();

        $this->render('admin\product.product-list', compact('product'));
    }

    public function addProduct()
    {

        $cate = Category::all();
        $this->render('admin\product.product-add', compact('cate'));
    }
    public function saveProduct()
    {
        $cate = Category::all();
        $error = [];

        if (empty($_POST['name']) || empty($_POST['detail']) || empty($_POST['price']) || empty($_POST['short_desc']) || empty($_POST['cate_id'])) {
            $error['required'] = 'Vui lòng nhập Đủ các trường!';
        }
        if (Product::where('name', $_POST['name'])->count() > 0) {
            $error['Name_required'] = 'Name đã tồn tại !';
        }
        if (!intval($_POST['price']) > 0) {
            $error['Price_required'] = 'Giá phải lớn hơn 0 !';
        }
        if (empty($_FILES['image']['name'])) {
            $error['File_required'] = 'Vui lòng thêm ảnh !';
        }
        if (empty($error)) {
            $product = new Product();
            $product->fill($_POST);
            $file =  $_FILES['image'];
            $avatar = '';
            if ($file['size'] > 0) {
                $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
                move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
                $product['image'] = $avatar;
            }
            if ($product->save() == false) {

                $_SESSION['status'] = 'Add failed!';
                $_SESSION['status_code'] = 'error';

                header('location:' . BASE_URL . '/admin/product');
            } else {
                $_SESSION['status'] = 'Successfully added!';
                $_SESSION['status_code'] = 'success';
                header('location: ' . BASE_URL . 'admin/product');
            }
        } else {
            $this->render('admin\product.product-add', compact('error', 'cate'));
        }
    }
    public function editProduct($id)
    {

        $product = Product::find($id);
        $cate = Category::all();
        if ($product) {
            $this->render('admin\product.product-edit', compact('product', 'cate'));
        } else {
            header('location:' . BASE_URL . 'admin/product');
        }
    }
    public function saveEditProduct($id)
    {

        $product = Product::find($id);
        if (!$product) {
            header('location:' . BASE_URL . 'admin/product');
            die;
        }
        $product->fill($_POST);

        $file =  $_FILES['image'];
        $avatar = '';
        if ($file['size'] > 0) {
            $avatar = 'uploads/' . uniqid() . '-' . $file['name']; // uniqid trả về mã tên ảnh để k bị trùng.
            move_uploaded_file($file['tmp_name'], 'public/' . $avatar);
            $product['image'] = $avatar;
        }

        if ($product->save() == false) {
            $_SESSION['status'] = 'Repair failed!';
            $_SESSION['status_code'] = 'error';
            header('location: ' . BASE_URL . 'admin/product');
        } else {
            $_SESSION['status'] = 'Repaired successfully!';
            $_SESSION['status_code'] = 'success';
            header('location:' . BASE_URL . 'admin/product');
        }
    }
    public function deleteProduct($id)
    {

        $product = Product::find($id);
        if (!$product) {
            header('location:' . BASE_URL . 'admin/product');
            die;
        }
        $product->delete();
        header('location:' . BASE_URL . 'admin/product');
    }
}
