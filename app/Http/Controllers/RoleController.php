<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request){
        $role = Role::paginate(5);
        
        return view('admin.role.index',compact('role'));
    }
    public function addForm(){
        
        return view('admin.role.add');
    }
    public function saveAdd(SaveRoleRequest $request){
        $model = new Role();
        $model->fill($request->all());
        $model->save();
        return redirect(route('role.index'));
    }
    public function editForm($id,Request $request){  
        $roles = Role::find($id);
        return response(compact('roles'), 200);
    }
    public function saveEdit($id,Request $request){
        $model = Role::find($id);
        $model->fill($request->all());
       
        $model->save();
        return response('true', 200);
    }
    public function remove($id){
        Role::destroy($id);
        return redirect(route('role.index'));
    }
}
