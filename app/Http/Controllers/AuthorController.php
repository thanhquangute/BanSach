<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AuthorController extends Controller
{
    public function getListAuthor(){
    	$author = Author::all();
    	return view('admin.author.list',['author'=>$author]);
    }
    public function getAddAuthor(){
    	return view('admin.author.add');
    }
    public function postAddAuthor(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3|max:100'
            ],
            [
                'name.required'=>'Ban chua nhap ten the loai',
                'name.min'=>'Ten the loai phai co do dai tu 3 ki tu',
                'name.max'=>'Ten the loai phai co do dai nho hon 100 ki tu'
            ]);
        $author = new Author;
        $author->author_name = $request->name;
       	$author->meta_title = changeTitle($request->name);
        $author->phone_number = $request->phone;
        $author->biography_author =$request->biography;
        $author->address = $request->address;
        $author->status = $request->status;
        $author->save();

        return redirect('admin/author/add')->with('thongbao','Add author successfully');
    }
    public function getEditAuthor($id){
    	$author = Author::find($id);
        return view('admin.author.edit',['author'=>$author]);
    }
    public function postEditAuthor(Request $request, $id){
        $author = Author:: find($id);
        $this->validate($request,
            [
                
            ],
            [
                
            ]);

        $author->author_name = $request->name;
       	$author->meta_title = changeTitle($request->name);
        $author->phone_number = $request->phone;
        $author->biography_author =$request->biography;
        $author->address = $request->address;
        $author->status = $request->status;
        $author->save();
        return redirect('admin/author/edit/'.$id)->with('thongbao','Edit author successfully');
    }

    public function GetListBookAuthor($id){
        $authorid = Author::find($id);
        $bookauthor = DB:: table('book')->join('author_book','book.id','=','author_book.book_id')->join('author','author_book.author_id','=','author.id')->orderBy('date_release', 'desc')->select('author.*','book.*','author_book.*')->get();
        return view('admin.author.listbook-author',['bookauthor'=>$bookauthor,'authorid'=>$authorid]);
    }
    // get book by author
    public function GetBookAuthor($id){
        $publisher = DB::table('publisher')->get();
        $authorid = Author::find($id);
        $author_book = DB::table('author_book')->get();
        // get all list author
        $author = DB::table('author')->get();
        $bookauthor = DB:: table('book')->join('author_book','book.id','=','author_book.book_id')->join('author','author_book.author_id','=','author.id')->orderBy('date_release', 'desc')->select('author.*','book.*','author_book.*')->paginate(30);
        return view('guest.click-publisher-author.book-author',['publisher'=>$publisher,'author'=>$author,'bookauthor'=>$bookauthor,'authorid'=>$authorid,'author_book'=>$author_book]);
    }
}
