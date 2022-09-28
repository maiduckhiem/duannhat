<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $product = Product::paginate(5);
        
        return view('admin.products.index',compact('product'));
    }
    public function addForm(){
        $category = Category::all();
        return view('admin.products.add',compact('category'));
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
        
        if($request->hasFile('product_image')) {
            ;
            // duyệt từng ảnh và thực hiện lưu
            foreach ($request->product_image as $index => $files) {
                $imgPath = $files->store('public/products');
                $imgPath = str_replace('public/', '', $imgPath);
                // Tạo đối tưọng HinhAnh
                $hinhAnh = new ProductImage();
                $hinhAnh->product_id = $model->id;
                $hinhAnh->image = $imgPath;
                $hinhAnh->save();
            }
         }
        return redirect(route('product.index'));
    }
    public function editForm($id,Request $request){  
        $product = Product::find($id);
        $category = Category::all();
        // return response()->json();
        return response(compact('category','product'), 200);
        // return  view('admin.products.edit',compact('category','product'));
    }
    public function saveEdit($id,SaveProductRequest $request){
        $model = Product::find($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        
        $model->save();
        return redirect(route('product.index'));
    }
    public function remove($id){
        Product::destroy($id);
        return redirect(route('product.index'));
    }

    
    public function profileUpdateImage(Request $request, $id)
    {
        $result = Product::find($id);
        $imgPath = $request['image']->store('public/products');
        $imgPath = str_replace('public/', '', $imgPath);
        $result->image = $imgPath;
        $result->save();
        return response()->json('true', 200);
    }
    
}
