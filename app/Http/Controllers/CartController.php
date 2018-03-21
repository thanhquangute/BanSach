<?php

namespace App\Http\Controllers;
use DB;
use Cart;
use App\Bill_Detail;
use App\Bill;
use App\Customer;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function GetShopCart($id){
   		$book_buy = DB::table('book')->where('id',$id)->first();
   		Cart::add(array('id'=>$id,'name'=>$book_buy->book_name,'qty'=>1,'price'=>$book_buy->price,'options'=>array('img'=>$book_buy->image)));
   		$content=Cart::content();
   		return redirect('gio-hang');
   	}
   	public function ShopCart(){
   		$total = Cart::subtotal();
   		$content = Cart::content();
   		
   		return view('guest.shopcart.shopcart',['content'=>$content,'total'=>$total]);
   	}
   	public function deleteCart($id){
   		Cart::remove($id);
   		return redirect('gio-hang');
   	}
   	public function updateCart(Request $request){
   		if($request->ajax()){
   			$id = Request::get('id');
   			$qty = Request::get('qty');
   			Cart::update($id, $qty);
   			echo "oke";
   		}
         return redirect('gio-hang');
   	}
     // public function getCheckOut(){
      //   $content = Cart::content();
      //   return view('guest.shopcart.shopcart',['content'=>$content]);
    // }
      public function postCheckOut(Request $request){
         $content = Cart::content();
         $customer = new Customer();
         $customer->name = $request->name;
         $customer->email = $request->email;
         $customer->address = $request->address;
         $customer->phone = $request->phone;
         $customer->save();

         //$bill = new Bill();
         //$bill->customer_id = $customer->id;
        // $bill->date_order = date('Y-m-d');
         //$bill->total = Cart::subtotal();
         //$bill->save();
        // foreach($content as $product){
        //        $bill_detail = new Bill_Detail();
        //        $bill_detail->bill_id = $bill->id;
        //        $bill_detail->book_id = $product->id;
         //       $bill_detail->quantity = $product->qty;
        //        $bill_detail->unit_price = $product->price;
        //        $bill_detail->save();
        //    }
      //Cart::destroy();
      return redirect('gio-hang')->with('thongbao', 'dat hang thanh cong');
   }
}
