@extends('admin\layouts.main')

@section('title' , 'Trang Chính')
@section('content')
<div class="wiTDet-program-bg">
    <div class="container-fluid">
        <div class="row row-admin d-flex justify-content-center" >
            <a href="{{BASE_URL.'admin/user'}}">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Tài Khoản</h3>
                            <p class="text-big font-light">
                                {{$user}}
                            </p>
                            <small>
                            Thêm Sửa Xoá Tài Khoản Người Dùng
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{BASE_URL.'admin/product'}}">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Sản Phẩm</h3>
                            <p class="text-big font-light">
                                {{$product}}
                            </p>
                            <small>
                            Thêm Sửa Xoá Sản Phẩm
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{BASE_URL.'admin/cate'}}">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Loại Sản phẩm</h3>
                            <p class="text-big font-light">
                                {{$cate}}
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

@endsection
