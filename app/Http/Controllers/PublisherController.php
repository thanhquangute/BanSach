<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;

use Illuminate\Support\Facades\DB;
class PublisherController extends Controller
{
    public function getListPublisher(){
    	$publisher = Publisher::all();
    	return view('admin.publisher.list',['publisher'=>$publisher]);
    }
    public function getAddPublisher(){
    	return view('admin.publisher.add');
    }
    public function postAddPublisher(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3|max:100'
            ],
            [
                'name.required'=>'Ban chua nhap ten the loai',
                'name.min'=>'Ten the loai phai co do dai tu 3 ki tu',
                'name.max'=>'Ten the loai phai co do dai nho hon 100 ki tu'
            ]);
        $publisher = new Publisher;
        $publisher->publisher_name = $request->name;
       	$publisher->meta_title = changeTitle($request->name);
       	$publisher->address = $request->address;
       	$publisher->phone_number = $request->phone;
       	$publisher->status = $request->status;
        $publisher->save();

        return redirect('admin/publisher/add')->with('thongbao','Add publisher successfully');
    }
    public function getEditPublisher($id){
    	$publisher = Publisher::find($id);
        return view('admin.publisher.edit',['publisher'=>$publisher]);
    }
    public function postEditPublisher(Request $request, $id){
        $publisher = Publisher::find($id);
        $this->validate($request,
            [
                
            ],
            [
                
            ]);

       $publisher->publisher_name = $request->name;
       	$publisher->meta_title = changeTitle($request->name);
       	$publisher->address = $request->address;
       	$publisher->phone_number = $request->phone;
       	$publisher->status = $request->status;
        $publisher->save();
        return redirect('admin/publisher/edit/'.$id)->with('thongbao','Edit publisher successfully');
    }

    // get book by publisher.
    public function GetBookPublisher($id){
        $publisher = DB::table('publisher')->get();
        $publisherid = Publisher::find($id);
        // get all list author
        $author = DB::table('author')->get();
        $bookpublisher = DB:: table('book')->join('publisher','book.publisher_id','=','publisher.id')->orderBy('date_release', 'desc')->select('publisher.*','book.*')->paginate(35);
        
        return view('guest.click-publisher-author.book-publisher',['publisher'=>$publisher,'bookpublisher'=>$bookpublisher,'publisherid'=>$publisherid,'author'=>$author]);
    }
}
