<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Category;

use App\Models\Product;

use App\Models\User;

class MainController  extends BaseController
{
  public function index()
  {
    $user = User::count();
    $product = Product::count();
    $cate = Category::count();
    $this->render('admin.home', compact('user', 'product', 'cate'));
  }
public function error(){
    $this->render('errors.404');
     
  }
}
