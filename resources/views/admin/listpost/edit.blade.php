@extends('admin.layouts.main')
@section('content-header')
    <h2>Edit ListPost</h2>
@endsection
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" value="{{$listpost->name}}"  class="form-control" placeholder="Nhập listpost">
                </div> 
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br>   
            </div>
            
            <div class="col-12 d-flex justify-content">
                
                <a href="{{route('listpost.index')}}" class="btn btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>
@endsection
