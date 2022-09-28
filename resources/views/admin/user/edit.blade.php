@extends('admin.layouts.main')
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Nhập tên">
                </div>
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br> 
                <!-- <div class="form-group">
                    <label for="">Chọn chức năng</label>
                    <select name="role_id" class="form-control">
                     @foreach ($roles as $item)
                        <option @if($item->id == $user->role_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    </select>
                    </div> -->
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control" >
                </div>
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br> 
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="password" value="{{$user->password}}" class="form-control" >
                </div>
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br> 
                <div class="form-group">
                    <label for="">Avatar:</label>
                    <input type="file" name="image" class="form-control" >
                    <img src="{{asset('storage/'.$user->avatar)}}" width="200px">
                </div>
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <br> 
                <br>    
            </div>
            
            <div class="col-12 d-flex justify-content">
                
                <a href="{{route('user.index')}}" class="btn btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>
@endsection
