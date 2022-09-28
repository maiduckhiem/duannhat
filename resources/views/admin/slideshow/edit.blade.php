@extends('admin.layouts.main')
@section('content-header')
    <h2>Add Slideshow</h2>
@endsection
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="image" class="form-control" >
                </div>
                <img src="{{asset('storage/'.$slideshow->image)}}" width="100px" height="100px"> 
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-12">
                <div class="form-group">
                  <label for="">Link liên kết</label>
                  <input type="text" name="link_lk" value="{{$slideshow->link_lk}}" placeholder="Nhập link_lk" class="form-control" >
                </div> 
                @error('link_lk')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
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
