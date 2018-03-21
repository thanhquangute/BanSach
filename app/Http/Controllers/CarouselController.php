<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use App\Carousel;
use App\Book;
class CarouselController extends Controller
{
     public function getListCarousel(){
    	$carousel = Carousel::all();
    	return view('admin.carousel.list',['carousel'=>$carousel]);
    }
    public function getAddCarousel(){
    	$book= Book::all();
    	return view('admin.carousel.add',['book'=>$book]);
    }
    public function postAddCarousel(Request $request){
        $carousel = new Carousel;
        $date = new DateTime('now');
        if($request->has('input-file-preview'))
        {

           $file=$request->file('input-file-preview');
           //if($file->getClientOriginalExtension('input-file-preview') ==""){
            $filename = $file->getClientOriginalName('input-file-preview');
            $file->move('image/banner', $filename);
            $carousel->carousel_name = $request->name;
            $carousel->meta_title = changeTitle($request->name);
            $carousel->date_update =  $date;
            $carousel->book_id = $request->book;
            $carousel->image_carouser = $filename;
            $carousel->save();
             return redirect('admin/carousel/add')->with('thongbao', 'Add Carousel successfully');
          }
        else{
            return redirect('admin/carousel/add')->with('thongbao', 'Add Carousel unsuccessfully');
        }
    }
    public function getEditCarousel($id){
    	$book = Book::all();
    	$carousel = Carousel::find($id);
        return view('admin.carousel.edit',['carousel'=>$carousel,'book'=>$book]);
    }
    public function postEditCarousel(Request $request, $id){
        $carousel = Carousel::find($id);
        $this->validate($request,
            [ ],[]);
        $date = new DateTime('now');
        if($request->has('input-file-preview'))
        {

           $file=$request->file('input-file-preview');
           //if($file->getClientOriginalExtension('input-file-preview') ==""){
            $filename = $file->getClientOriginalName('input-file-preview');
            $file->move('image/banner', $filename);
            $carousel->carousel_name = $request->name;
            $carousel->meta_title = changeTitle($request->name);
            $carousel->date_update =  $date;
            $carousel->book_id = $request->boo1k;
            $carousel->image_carouser = $filename;
            $carousel->save();
             return redirect('admin/carousel/edit/'.$id)->with('thongbao', 'Edit Carouserl successfully');
          }
           //else{
            //   return redirect('admin/carouser/add')->with('thongbao','File khong dung dinh dang');
           //}
        //}
        else{
            return redirect('admin/carousel/edit/'.$id)->with('thongbao', 'Edit Carousel unsuccessfully');
        }
    }
    public function getDeleteCarousel($id){
        $carousel = Carousel::find($id);
        $carousel->delete();
        return redirect('admin/carousel/list')->with('thongbao','Delete carousel successfully');
    }
}
