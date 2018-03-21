<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Category_Item;
use Illuminate\Http\Request;

class Category_ItemController extends Controller
{
    public function getListCategoryItembyCategory($id){
    	$category = Category::find($id);
    	$categoryitem=DB::table('category')-> join('category_item','category.id','=','category_item.category_id')->where('category_item.category_id',$id)->select('category_item.*')->get();
    	return view('admin.category_item.list_categoryitem_by_category',['category'=>$category,'categoryitem'=>$categoryitem]);
    }
     public function getListCategoryItem(){
    	$categoryitem = Category_Item::all();
    	return view('admin.category_item.list_category_item',['categoryitem'=>$categoryitem]);
    }
    public function getEditCategoryItem($id){
    	$category = Category::all();
    	$categoryitem = Category_Item::find($id);
        return view('admin.category_item.edit',['category'=>$category,'categoryitem'=>$categoryitem]);
    }
    public function postEditCategoryItem(Request $request, $id){
        $categoryitem = Category_Item::find($id);
        $this->validate($request,
            [
                
            ],
            [
                
            ]);

        $categoryitem->category_name_item = $request->name;
       	$categoryitem->meta_title = changeTitle($request->name);
       	$categoryitem->category_id = $request->category;
        $categoryitem->save();
        return redirect('admin/categoryitem/edit/'.$id)->with('thongbao','Edit categoryitem successfully');
    }
    public function getAddCategoryItem(){
    	$category = Category::all();
    	return view('admin.category_item.add',['category'=>$category]);
    }
    public function postAddCategoryItem(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3|max:100'
            ],
            [
                'name.required'=>'Ban chua nhap ten the loai',
                'name.min'=>'Ten the loai phai co do dai tu 3 ki tu',
                'name.max'=>'Ten the loai phai co do dai nho hon 100 ki tu'
            ]);
        $categoryitem = new Category_Item;
        $categoryitem->category_name_item = $request->name;
       	$categoryitem->meta_title = changeTitle($request->name);
       	($categoryitem->category_id = $request->category);

        $categoryitem->save();

        return redirect('admin/categoryitem/add')->with('thongbao','Add category item successfully');
    }
    public function getDeleteCategoryItem($id){
        $categoryitem = Category_Item::find($id);
        $categoryitem->delete();
        return redirect('admin/categoryitem/list')->with('thongbao','Delete category item successfully');
    }
}
