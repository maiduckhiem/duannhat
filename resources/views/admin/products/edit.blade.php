@extends('admin.layouts.main')
@section('content-header')
    <h2>Edit Product</h2>
@endsection
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" value="{{$product->name}}"  class="form-control" placeholder="Nhập sản phẩm">
                </div> 
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="image" class="form-control" >
                  <img src="{{asset('storage/'.$product->image)}}" width="200px">
                </div> 
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Price</label>
                  <input type="text" name="price" value="{{$product->price}}" placeholder="Nhập giá" class="form-control" >
                </div> 
                @error('price')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Quantity</label>
                  <input type="number" name="quantity" value="{{$product->quantity}}" placeholder="Nhập số lượng" class="form-control" >
                </div> 
                @error('quantity')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Link - Sản Phẩm</label>
                  <input type="text" name="link_sp" value="{{$product->link_sp}}" placeholder="Điền link sản phẩm" class="form-control" >
                </div> 
                @error('link_sp')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="">Category</label>
                    <select name="cate_id" class="form-control">
                        @foreach($category as $item)
                            <option @if ($item->id == $product->cate_id)
                                selected
                            @endif value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                  <label for="">Description</label>
                  <br>
                  <textarea name="description" id="" cols="70" rows="10">{{$product->description}}</textarea>
                </div> 
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-12">
                <div class="form-group">
                  <label for="">Sản phẩm Nổi Bật</label>
                  <select name="status" class="form-control">
                      @if ($product->status == 1)
                      <option selected value="1">Hot</option>
                      <option value="0">Bình thường</option>
                      @else
                        <option value="1">Hot</option>
                        <option selected value="0">Bình thường</option>
                    @endif
                  </select>
                  </div> 
            </div>
            <div class="col-12 d-flex justify-content">
                
                <a href="{{route('product.index')}}" class="btn btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>
@endsection


