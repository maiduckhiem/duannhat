<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){
        $user = User::all();
        return view('admin.client.index',compact('user'));
    }
    public function addForm(){
        $category = Category::all();
        return view('admin.client.add',compact('category'));
    }
    public function saveAdd(SaveProductRequest $request){
    
        $model = new Product();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('public/products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        
        $model->save();
        return redirect(route('product.index'));
    }

    // public function editForm($id){
    public function editForm($id,Request $request){  
        $user = User::find($id);
        $roles = Role::all();
        return response(compact('user','roles'), 200);
    }

    //
    public function saveEdit($id,Request $request){
        $model = User::find($id);
        $model->fill($request->all());
        $model->save();
        return response('true', 200);
    }

    public function productUpdateImage(Request $request, $id)
    {
        $result = User::find($id);
        $imgPath = $request['image']->store('public/products');
        $imgPath = str_replace('public/', '', $imgPath);
        $result->avatar = $imgPath;
        $result->save();
        return response()->json('true', 200);
    }
    


    public function remove($id){
        Product::destroy($id);
        return redirect(route('product.index'));
    }
}
