<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Role;
class UserController extends Controller
{
    public function GetListUser(){
    	$user = User::all();
    	return view('admin.user.list',['user'=>$user]);
    }
    public function getAddUser(){
        return view('admin.user.add');
    }
    public function postAddUser(Request $request){
       $user = new User;
        $this->validate($request,
            [ ],[]);
       		$user->name = $request->name;
        	$user->email = $request->email;
        	$user->password = bcrypt($request->pass);
        	$user->phone = $request->phone;
        	$user->sex = $request->sex;
        	$user->birthday = $request->birthday;
        	$user->qddress = $request->address;
        	$user->provice = $request->provice;
        	$user->distrist = $request->distrist;
        	$user->role_id = $request->role;
            $user->save();
             return redirect('admin/user/add')->with('thongbao', 'Add User successfully');
    }
    public function GetUserDetails($id){
    	$user = User::find($id);
    	return view('admin.user.user_details',['user'=>$user]);
    }
    public function getEditUser($id){
        $role = Role::all();
        $user = User::find($id);
        return view('admin.user.edit',['role'=>$role,'user'=>$user]);
    }
    public function postEditUser(Request $request, $id){
        $user = User::find($id);
        $this->validate($request,
            [ ],[]);
       		 $user->name = $request->name;
        	$user->password = bcrypt($request->pass);
        	$user->phone = $request->phone;
        	$user->sex = $request->sex;
        	$user->birthday = $request->birthday;
        	$user->qddress = $request->address;
        	$user->provice = $request->provice;
        	$user->distrist = $request->distrist;
        	$user->role_id = $request->role;
            $user->save();
             return redirect('admin/user/list')->with('thongbao', 'Edit User successfully');
    }
}
        