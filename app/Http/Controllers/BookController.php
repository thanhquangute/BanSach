<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;
use App\Publisher;
use App\Author;
use App\Category_Item;
class BookController extends Controller
{
    //admin
    public function getListBook(){
        $book = Book::all();
        return view('admin.book.list',['book'=>$book]);
    }
    public function getListBookDetails($id){
        $book = Book::find($id);
        return view('admin.book.detail_book',['book'=>$book]);
    }
    public function getAddBook(){
        $publisher = Publisher::all();
        $categoryitem = Category_Item::all();
        return view('admin.book.add',['publisher'=>$publisher,'categoryitem'=>$categoryitem]);
    }
    public function postAddBook(Request $request){
        $book = new Book;
        $this->validate($request,
            [ ],[]);
        $date = new DateTime('now');
       
           
            $book->book_name = $request->name;
            $book->meta_title = changeTitle($request->name);
            $book->quantity = $request->quantity;
            $book->date_update =  $date;
            $book->price = $request->price;
            $book->weight = $request->weight;
            $book->size = $request->size;
            $book->page_number = $request->page_number;
            $book->format_cove_book = $request->format;
            $book->date_release = $request->date_release;
            $book->status_book = $request->status;
            $book->publisher_id = $request->publisher;
            $book->category_item_id = $request->category;
            $book->save();
             return redirect('admin/book/add')->with('thongbao', 'Add Book successfully');
    }
    public function getEditBook($id){
        $categoryitem = Category_Item::all();
        $publisher = Publisher::all();
        $book = Book::find($id);
        return view('admin.book.edit',['categoryitem'=>$categoryitem,'book'=>$book,'publisher'=>$publisher]);
    }
    public function postEditBook(Request $request, $id){
        $book = Book::find($id);
        $this->validate($request,
            [ ],[]);
        $date = new DateTime('now');
        if($request->has('input-file-preview'))
        {

          $file=$request->file('input-file-preview');
           //if($file->getClientOriginalExtension('input-file-preview') ==""){
            $filename = $file->getClientOriginalName('input-file-preview');
            $file->move('image/sach', $filename);
            $book->book_name = $request->name;
            $book->meta_title = changeTitle($request->name);
            $book->quantity = $request->quantity;
            $book->date_update =  $date;
            $book->price = $request->price;
            $book->weight = $request->weight;
            $book->size = $request->size;
            $book->page_number = $request->page_number;
            $book->format_cove_book = $request->format;
            $book->date_release = $request->date_release;
            $book->status_book = $request->status;
            $book->publisher_id = $request->publisher;
            $book->category_item_id = $request->category;
            $book->image = $filename;
            $book->save();
             return redirect('admin/book/edit/'.$id)->with('thongbao', 'Edit Book successfully');
          }
           //else{
            //   return redirect('admin/carouser/add')->with('thongbao','File khong dung dinh dang');
           //}
        //}
        else{
            return redirect('admin/book/edit/'.$id)->with('thongbao', 'Edit Book unsuccessfully');
        }
    }


    //get list book new
    public function GetBookNew(){
        $date = new DateTime('now');
        $publisher = Publisher::all();
        $author = Author::all();
		// format date now day/month/year
		$date->format("d, m, Y");
		$booksaleall = DB::table('promotion_detail')-> join('promotion','promotion_detail.promotion_id','=','promotion.id')->where('date_start_promotion','<',$date)->where('date_end_promotion','>',$date)->get();
        $booknew = DB::table('book')->orderBy('date_release', 'desc')->paginate(30);
        return view('guest.book-new.list_book_new_click_book_new',['booknew'=>$booknew,'booksaleall'=>$booksaleall,'publisher'=>$publisher,'author'=>$author]);
    }
    // get list book prommotion
    public function GetBookPromotion(){
        
        $publisher = Publisher::all();
        $author = Author::all();
		// format date now day/month/year
        $date = new DateTime('now');
		$date->format("d, m, Y");
		$booksaleall = DB::table('promotion_detail')->join('promotion','promotion_detail.promotion_id','=','promotion.id')->join('book','promotion_detail.book_id','=','book.id')->where('date_start_promotion','<',$date)->where('date_end_promotion','>',$date)->select('book.*','promotion_detail.*')->paginate(30);
        return view('guest.book-promotion.list_book_promotion_click_book_promotion',['booksaleall'=>$booksaleall,'publisher'=>$publisher,'author'=>$author]);
    }
    // get list book review
    public function GetBookReview(){
       
        $publisher = Publisher::all();
        $author = Author::all();
		// format date now day/month/year
        $date = new DateTime('now');
		$date->format("d, m, Y");
		$booksaleall = DB::table('promotion_detail')->join('promotion','promotion_detail.promotion_id','=','promotion.id')->where('date_start_promotion','<',$date)->where('date_end_promotion','>',$date)->get();
		$bookreview = DB::table('book')->paginate(30);
        return view('guest.book-review.list_book_review_click_book_review',['booksaleall'=>$booksaleall,'publisher'=>$publisher,'author'=>$author,'bookreview'=>$bookreview]);
    }
    // get list book release
    public function GetBookRelease(){
        $date = new DateTime('now');
        $publisher = Publisher::all();
        $author = Author::all();
		// format date now day/month/year
		$date->format("d, m, Y");
		$booksaleall = DB::table('promotion_detail')->join('promotion','promotion_detail.promotion_id','=','promotion.id')->where('date_start_promotion','<',$date)->where('date_end_promotion','>',$date)->get();
		$bookrelease = DB::table('book')->where('date_release','>',$date)->orderBy('date_release', 'desc')->paginate(30);
        return view('guest.book-release.list_book_release_click_book_review',['booksaleall'=>$booksaleall,'publisher'=>$publisher,'author'=>$author,'bookrelease'=>$bookrelease]);
    }

    // get information book
    public function GetInformationBook($id){
        $book_detail=DB::table('book')->join('publisher','book.publisher_id','=','publisher.id')->join('author_book','book.id','=','author_book.book_id')->join('author','author_book.author_id','=','author.id')->where('book.id','=',$id)->get();

        $author = Author::find($id);
        $bookauthor = DB:: table('book')->join('author_book','book.id','=','author_book.book_id')->join('author','author_book.author_id','=','author.id')->orderBy('date_release', 'desc')->select('author.*','book.*','author_book.*')->take(6)->get();
       
        $date = new DateTime('now');
        $date->format("d, m, Y");
        $booksaleall = DB::table('promotion_detail')->join('promotion','promotion_detail.promotion_id','=','promotion.id')->where('date_start_promotion','<',$date)->where('date_end_promotion','>',$date)->get();
        return view('guest.book-info.book_details',['book_detail'=>$book_detail,'bookauthor'=>$bookauthor,'author'=>$author,'booksaleall'=>$booksaleall]);
    }


    public function postPayment(Request $request){
        try{
            $bill = new bills();
            $bill->name = $request->name;
            $bill->email = $request->email;
            $bill->address = $request->address;
            $bill->phone = $request->phone;
            $bill->status = 1;
            // $bill->created_at = new DateTime();

            $bill->total_price = Cart::subtotal();
            $bill->save();

            
            $cart_current = Cart::content();
            foreach($cart_current as $product){
                $bill_detail = new bill_detail();
                $bill_detail->bill_id = $bill->id;
                $bill_detail->product_id = $product->id;
                $bill_detail->quantity = $product->qty;
                $bill_detail->price = $product->price;
                $bill_detail->save();
            }

            $mess = "Đã yêu cầu đặt hàng! Thông tin đơn hàng sẽ được gửi tới email của bạn!";
            Cart::destroy();
            return redirect()->back()->with(['mess'=>$mess]);
        }catch(\Exception $e){
            return abort(404); //it's automatically redirect to your resources/views/errors/404.blade.php
        }
}
