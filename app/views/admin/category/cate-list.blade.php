

@extends('admin\layouts.main')

@section('title' , 'Categories')
@section('content')
<div class="add-product">
    <a href="{{BASE_URL}}admin/cate/add">Thêm Mới</a>
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
    @php
        $stt = 1;
    @endphp
@foreach ($cate as $item)
    

    <tr>
        <td> {{$stt++}} </td>
        <td> {{$item->cate_name}} </td>
        <td><img width="50px" src="{{PUBLIC_URL.$item->cate_avatar}}" alt="" /> </td>
  
        <td> {{$item->type_detail}} </td>
        <td> {{count($item->products)}} </td>
      
       
        <td>
       <a href="{{BASE_URL}}admin/cate/edit/{{$item->id}}"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
       <a class="btn-del"  href="{{BASE_URL}}admin/cate/{{$item->id}}" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    @endforeach
</table>
@endsection
@section('pagination')


@endsection