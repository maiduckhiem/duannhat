<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Statusdetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function doashboard()
    {
        return view('admin.doashboard.index');
    }
    public function statistical()
    {
        return view('admin.statistical.index');
    }
    public function carts()
    {
        $carts = Cart::paginate(10);
        $spctt =  Cart::where('status', '1')->get();
        $spxl =  Cart::where('status', '2')->get();
        $spdc =  Cart::where('status', '4')->get();
        $sptt =  Cart::where('status', '3')->get();
        $spnbg =  Cart::where('status', '5')->get();
        $spk =  Cart::where('status', '6')->get();
        $spdvc =  Cart::where('status', '7')->get();
        $spkvn =  Cart::where('status', '8')->get();
        $spssg =  Cart::where('status', '9')->get();
        $spxlkn =  Cart::where('status', '10')->get();
        $spdgh =  Cart::where('status', '11')->get();
        $spdkt =  Cart::where('status', '12')->get();
        $spdh =  Cart::where('status', '13')->get();
        return view('admin.carts.index', compact('carts', 'spxl', 'spdc', 'sptt', 'spnbg', 'spk', 'spdvc', 'spkvn', 'spssg', 'spxlkn', 'spdgh', 'spdkt', 'spdh', 'spctt'));
    }
    public function settingcart($id)
    {
        $carts = Cart::find($id);
        return view('admin.settingcart.index', compact('carts'));
    }
    public function addform()
    {
        return view('admin.carts.add');
    }

    public function editForm($id, Request $request)
    {
        $cart = Cart::find($id);
        $status = Statusdetail::all();
        // return view('admin.categories.edit',compact('category'));
        return response(compact('cart', 'status'), 200);
    }
    public function saveEdit($id, Request $request)
    {
        $model = Cart::find($id);
        $model->fill($request->all());
        $model->save();
        return response(['message' => 'Sửa thành công'], 200);

        // return redirect(route('categorys.index'));
        return response('true', 200);
    }
    // public function setPermission($id, $request)
    // {
    //     $user = $this->findOrFail($id);
    //     $user->assignRole($request['permission']);
    // }
    public function saveAdd(Request $request)
    {
        $macart = 'SP' . random_int(10000, 1000000000);
        $model = new Cart();
        $model->fill($request->all());
        $model->status = 1;
        $model->ma_sp = $macart;
        $model->save();
        return redirect(route('carts.index'));
    }
}
