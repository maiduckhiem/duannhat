<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        $category = Category::paginate(5);
        return view('admin.categories.index',compact('category'));
    }
    public function addForm(){
        return view('admin.categories.add');
    }
    public function saveAdd(SaveCategoryRequest $request){
        $model = new Category();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect(route('categorys.index'));
    }
    public function editForm($id,Request $request){  
        $category = Category::find($id);
        // return view('admin.categories.edit',compact('category'));
        return response(compact('category'), 200);
    }
    public function saveEdit($id,SaveCategoryRequest $request){
        $model = Category::find($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        // return redirect(route('categorys.index'));
        return response('true', 200);
    }
    public function remove($id){
        Category::destroy($id);
        Product::where('cate_id',$id)->delete();
        return redirect(route('categorys.index'));
    }
}
