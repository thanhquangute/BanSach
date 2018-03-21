<?php

namespace App\Http\Controllers;
use App\Category;
use App\Carousel;
use App\Book;
use App\Category_Item;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function getHome(){
    	$date = new DateTime('now');
		// format date now day/month/year
		$date->format("d, m, Y");
    	$category = Category::all();
        $category_item = Category_Item::all();
    	$carouselfirst = DB::table('carousel')->orderBy('date_update', 'desc')->first();
    	$carouselsecond = DB::table('carousel')->orderBy('date_update', 'desc')->skip(1)->take(1)->get();
    	$carouselthree = DB::table('carousel')->orderBy('date_update', 'desc')->skip(2)->take(1)->get();
    	$carouselfour = DB::table('carousel')->orderBy('date_update', 'desc')->skip(3)->take(1)->get();
    	$carousel = DB::table('carousel')->orderBy('date_update', 'desc')->skip(1)->take(3)->get();
    	$book = Book::all();
    	$book_review = DB::table('book')->take(6)->get();
        $booksaleall = DB::table('promotion_detail')-> join('promotion','promotion_detail.promotion_id','=','promotion.id')->where('date_start_promotion','<',$date)->where('date_end_promotion','>',$date)->get();
    	$booknew = DB::table('book')->where('date_release', '<',$date)->orderBy('date_release', 'desc')->take(6)->get();
    	$bookreleased = DB::table('book')->where('date_release', '>',$date)->orderBy('date_release', 'desc')->take(6)->get();
        $bookpromotion=DB::table('book')-> join('promotion_detail','book.id','=','promotion_detail.book_id')->select('book.*','promotion_detail.*')->take(6)->orderBy('promotion_detail.discount', 'desc')->get();
        $bookcategory1 =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',1)->take(6)->get();
        $bookcategory2 =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',2)->take(6)->get();
        $bookcategory3 =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',3)->take(6)->get();
        $bookcategory7 =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',7)->take(6)->get();
        $bookcategoryfirst =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',4)->take(1)->get();
        $bookcategorysecond =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',5)->take(1)->get();
        $bookcategory4 =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',4)->take(6)->get();
        $bookcategory5 =DB::table('category_item')->join('book', 'category_item.id', '=', 'book.category_item_id')->orderBy('date_release', 'desc')->select('category_item.*','book.*')->where('category_item.category_id','=',5)->take(6)->get();
    	return view('guest.home.index',['category'=>$category,'carouselfirst'=>$carouselfirst,'carousel'=>$carousel,'carouselsecond'=>$carouselsecond,'carouselthree'=>$carouselthree,'carouselfour'=>$carouselfour,'book_review'=>$book_review,'booknew'=>$booknew,'bookreleased'=>$bookreleased,'bookpromotion'=>$bookpromotion,'booksaleall'=>$booksaleall,'bookcategory1'=>$bookcategory1,'bookcategory2'=>$bookcategory2,'bookcategory3'=>$bookcategory3,'bookcategory7'=>$bookcategory7,'category_item'=>$category_item,'bookcategory4'=>$bookcategory4,'bookcategory5'=>$bookcategory5,'bookcategorysecond'=>$bookcategorysecond,'bookcategoryfirst'=>$bookcategoryfirst]);
    }
}
