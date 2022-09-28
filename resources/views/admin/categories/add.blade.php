@extends('admin.layouts.main')
@section('content-header')
    <h2>Add Categories</h2>
@endsection
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name"  class="form-control" placeholder="Nhập Category">
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
                </div> 
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            <div class="col-12 d-flex justify-content">
                
                <a href="{{route('categorys.index')}}" class="btn btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>
@endsection
