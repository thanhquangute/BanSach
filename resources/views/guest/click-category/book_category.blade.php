@extends('guest.click-category.index')
@section('content-category')
<div class="col2">
	@foreach( $category_item as $dmsc)
        <div class="n3t clearfix">
            <a href="sach-theo-danh-muc-{{$dmsc->id}}" title="{{$dmsc->category_name_item}}" class="more">Xem tất cả <img src="image/more.jpg" alt="Xem tất cả"></a>
            <h2><a href="sach-theo-danh-muc-{{$dmsc->id}}" title="{{$dmsc->category_name_item}}">{{$dmsc->category_name_item}}</a></h2>
        </div>
        <div class="default">
            <div class="dmslider carousel">
		    <ul class="list1 clearfix" style="margin-right: -60px;">
		        @foreach($book_category_item as $sdmc)
		        @if($sdmc->category_item_id == $dmsc->id)
			        <li>
			            <div class="list1img">
			                <a href="{{$sdmc->book_name}}" title="{{$sdmc->book_name}}"><img class="lazy" data-original="image\sach\{{$sdmc->image}}" alt="{{$sdmc->book_name}}" src="image\sach\{{$sdmc->image}}" style="display: inline;">
			                </a>
			            </div>
			            <div class="list1a1"><a href="" title="{{$sdmc->book_name}}">{{$sdmc->book_name}}</a>
			            </div>
			            <div class="price1">{{$sdmc->price}} đ</div>
			            <div class="phathanh">Phát hành: {{$sdmc->date_release}}<b></b></div>
			            <br>
			            <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(12060,1);" class="buy1 listprocart">Đặt hàng</a>
			            </p>
			        </li>
			        @endif
		        @endforeach
		    </ul>
			</div>
        </div>
    @endforeach
	
</div>
@endsection