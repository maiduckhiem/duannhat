<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveSlideShow;
use App\Models\Slideshow;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    public function index()
    {
        $slideshow = Slideshow::paginate(5);
        return view('admin.slideshow.index', compact('slideshow'));
    }
    public function addForm()
    {
        return view('admin.slideshow.add');
    }
    public function saveAdd(SaveSlideShow $request)
    {
        $model = new Slideshow();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('products');
            $imgPath = str_replace('public/', '', $imgPath);
            $model->image = $imgPath;
        }
        $model->save();
        return redirect()->route('slideshow.index')->with('msg', 'Thêm thành công');
    }
    public function editForm($id)
    {
        $slideshow = Slideshow::find($id);
        // return view('admin.slideshow.edit', compact('slideshow'));
        return response(compact('slideshow'), 200);
    }
    public function saveEdit(SaveSlideShow $request, $id)
    {
        $model = Slideshow::find($id);
        $model->fill($request->all());

        $model->save();
        // return redirect()->route('slideshow.index')->with('msg', 'Sửa thành công');
        return response('true', 200);
    }
    public function remove($id)
    {
        $model = Slideshow::find($id);
        $model->delete();
        return redirect()->route('slideshow.index')->with('msg', 'Xóa thành công');
    }
    // image
    public function updateImage(Request $request, $id)
    {
        $result = Slideshow::find($id);
        $imgPath = $request['image']->store('public/products');
        $imgPath = str_replace('public/', '', $imgPath);
        $result->image = $imgPath;
        $result->save();
        return response()->json('true', 200);
    }
}
