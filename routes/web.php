<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('admin', function(){
	return view('admin.layout.index');
});
Route::get('11', function(){
	return view('guest.click-category.index');
});
Route::get('gio-hang', function(){
	return view('guest.shopcart.shopcart');
});
Route::get('dang-nhap', function(){
	return view('guest.login.login');
});
Route::get('/','HomeController@getHome');
Route::get('trang-chu','HomeController@getHome');
Route::get('danh-muc-{id}','CategoryController@getListCategoryItem');
Route::get('danh-muc-{id}','CategoryController@getListBookCategory');
Route::get('sach-theo-danh-muc-{id}','CategoryController@GetBookCategory');
Route::get('sach-theo-nha-xuat-ban-{id}','PublisherController@GetBookPublisher');
Route::get('sach-theo-tac-gia-{id}','AuthorController@GetBookAuthor');
Route::get('sach-moi','BookController@GetBookNew');
Route::get('sach-giam-gia','BookController@GetBookPromotion');
Route::get('sach-khuyen-doc','BookController@GetBookReview');
Route::get('sach-sap-phat-hanh','BookController@GetBookRelease');
Route::get('thong-tin-sach-{id}','BookController@GetInformationBook');

//Route::get('mua-hang/{id}','CartController@GetShopCart');
//Route::get('gio-hang','CartController@ShopCart');
//Route::get('xoa-san-pham/{id}','CartController@deleteCart');
//Route::get('cap-nhat/{id}/{qty}','CartController@updateCart');
//Route::get('gio-hang','CartController@getCheckOut');
///Route::post('gio-hang','CartController@postCheckOut');
Route::get('add-to-cart/{id}',['as'=>'addtocart','uses'=>'TestController@getAddToCart']);
Route::get('page-add-to-cart/{id}',['as'=>'pageaddtocart','uses'=>'TestController@getPageAddToCart']);
Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'book'],function(){
		Route::get('list','BookController@getListBook');
		Route::get('book-details/{id}','BookController@getListBookDetails');
		Route::get('edit/{id}','BookController@getEditBook');
		Route::post('edit/{id}','BookController@postEditBook');
		Route::get('add','BookController@getAddBook');
		Route::post('add','BookController@postAddBook');
	});
	Route::group(['prefix'=>'carousel'],function(){
		Route::get('list','CarouselController@getListCarousel');
		Route::get('edit/{id}','CarouselController@getEditCarousel');
		Route::post('edit/{id}','CarouselController@postEditCarousel');
		Route::get('add','CarouselController@getAddCarousel');
		Route::post('add','CarouselController@postAddCarousel');
		Route::get('delete/{id}','CarouselController@getDeleteCarousel');
	});
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','CategoryController@getListCategory');
		Route::get('edit/{id}','CategoryController@getEditCategory');
		Route::post('edit/{id}','CategoryController@postEditCategory');
		Route::get('add','CategoryController@getAddCategory');
		Route::post('add','CategoryController@postAddCategory');
	});
	Route::group(['prefix'=>'categoryitem'],function(){
		Route::get('list-category-item-by-category/{id}','Category_ItemController@getListCategoryItembyCategory');
		Route::get('list','Category_ItemController@getListCategoryItem');
		Route::get('edit/{id}','Category_ItemController@getEditCategoryItem');
		Route::post('edit/{id}','Category_ItemController@postEditCategoryItem');
		Route::get('add','Category_ItemController@getAddCategoryItem');
		Route::post('add','Category_ItemController@postAddCategoryItem');
		Route::get('delete/{id}','Category_ItemController@getDeleteCategoryItem');
	});
	Route::group(['prefix'=>'author'],function(){
		Route::get('list','AuthorController@getListAuthor');
		Route::get('list-book/{id}','AuthorController@getListBookAuthor');
		Route::get('edit/{id}','AuthorController@getEditAuthor');
		Route::post('edit/{id}','AuthorController@postEditAuthor');
		Route::get('add','AuthorController@getAddAuthor');
		Route::post('add','AuthorController@postAddAuthor');
	});
	Route::group(['prefix'=>'publisher'],function(){
		Route::get('list','PublisherController@getListPublisher');
		Route::get('edit/{id}','PublisherController@getEditPublisher');
		Route::post('edit/{id}','PublisherController@postEditPublisher');
		Route::get('add','PublisherController@getAddPublisher');
		Route::post('add','PublisherController@postAddPublisher');
		
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('list','UserController@GetListUser');
		Route::get('user-details/{id}','UserController@GetUserDetails');
		Route::get('add','UserController@getAddUser');
		Route::post('add','UserController@postAddUser');
		Route::get('edit/{id}','UserController@getEditUser');
		Route::post('edit/{id}','UserController@postEditUser');
	});
});




