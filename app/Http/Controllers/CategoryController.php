<?php

namespace App\Http\Controllers;
use App\Category;
use App\Category_Item;
use App\Author;
use App\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getListCategory(){
    	$category = Category::all();
    	return view('admin.category.list',['category'=>$category]);
    }
    public function getAddCategory(){
    	return view('admin.category.add');
    }
    public function postAddCategory(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3|max:100'
            ],
            [
                'name.required'=>'You have not entered a category name yet',
                'name.min'=>'Category name must be at least 3 characters',
                'name.max'=>'Category name must be less than 100 characters'
            ]);
        $category = new Category;
        $category->category_name = $request->name;
       	$category->meta_title = changeTitle($request->name);
        $category->status = $request->status;
        $category->save();

        return redirect('admin/category/add')->with('thongbao','Add category successfully');
    }
    public function getEditCategory($id){
    	$category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }
    public function postEditCategory(Request $request, $id){
        $category = Category::find($id);
        $this->validate($request,
            [
                'name' => 'required|min:3|max:100'
            ],
            [
                'name.required'=>'You have not entered a category name yet',
                'name.min'=>'Category name must be at least 3 characters',
                'name.max'=>'Category name must be less than 100 characters'
            ]);

        $category->category_name = $request->name;
       	$category->meta_title = changeTitle($request->name);
        $category->status = $request->status;
        $category->save();
        return redirect('admin/category/edit/'.$id)->with('thongbao','Edit category successfully');
    }

    // guest click

    public function getListCategoryItem($id){
        $author = Author::all();
        $publisher = Publisher::all();
        $category_item =DB::table('category')-> join('category_item','category.id','=','category_item.category_id')->where('category.id','=',$id)->select('category_item.*')->get();
        $book_category_item=DB::table('book')-> join('category_item','book.category_item_id','=','category_item.id')->select('book.*', 'category_item.*')->get();
        return view('guest.click-category.index',['category_item'=>$category_item,'author'=>$author,'publisher'=>$publisher,'book_category_item'=>$book_category_item]);
    }
     public function getListBookCategory($id){
        $author = Author::all();
        $publisher = Publisher::all();
        $category_item =DB::table('category')-> join('category_item','category.id','=','category_item.category_id')->where('category.id','=',$id)->select('category_item.*')->get();
        $book_category_item=DB::table('book')-> join('category_item','book.category_item_id','=','category_item.id')->select('book.*', 'category_item.*')->get();
        $getcategoryitem=DB::table('category')-> join('category_item','category.id','=','category_item.category_id')->select('category_item.*')->get();
        return view('guest.click-category.book_category',['book_category_item'=>$book_category_item,'category_item'=>$category_item,'author'=>$author,'publisher'=>$publisher,'getcategoryitem'=>$getcategoryitem]);
    }
    public function GetBookCategory($id){
        // find category item with id
        $category_item =DB::table('category')-> join('category_item','category.id','=','category_item.category_id')->where('category.id','=',$id)->select('category_item.*')->get();
        $categoryitem = Category_Item::find($id);
        // get all list publisher
        $publisher = DB::table('publisher')->get();
        // get all list author
        $author = DB::table('author')->get();
        //get all list category
        $category = DB::table('category')->get();
        // get list book arcording to book and categoryitem
        $bookcategory = DB:: table('book')->join('category_item','book.category_item_id','=','category_item.id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->paginate(50);
       $getcategoryitem=DB::table('category')-> join('category_item','category.id','=','category_item.category_id')->select('category_item.*')->get();
        return view('guest.click-category-item.book_category_item',['bookcategory'=>$bookcategory,'categoryitem'=>$categoryitem,'category'=>$category,'getcategoryitem'=>$getcategoryitem,'publisher'=>$publisher, 'author'=>$author,'category_item'=>$category_item]);
    }
}
