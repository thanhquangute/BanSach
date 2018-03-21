@extends('guest.click-category-item.index')
@section('content-category')
<div class="col2">
    <div class="n3t clearfix">
		@foreach($category as $bc)
			@if($categoryitem->category_id== $bc->id)
	            <h4><strong>{{$categoryitem->category_name_item}}</strong></h4>
	        @endif
	    @endforeach
    </div>
    <div class="default">
        <div class="dmslider carousel">
            <ul class="list1 clearfix" style="margin-right: -60px;">
                @foreach($bookcategory as $bc)
					@if($bc->category_item_id == $categoryitem->id)
	                    <li>
	                        <div class="list1img">
	                            <a href="thong-tin-sach-{{$bc->id}}" title="{{$bc->book_name}}"><img class="lazy" data-original="image/sach/{{$bc->image}}" alt="{{$bc->book_name}}" src="image/sach/{{$bc->image}}" style="display: inline;">
	                            </a>
	                        </div>
	                        <div class="list1a1"><a href="thong-tin-sach-{{$bc->id}}" title="{{$bc->book_name
	                        }}">{{$bc->book_name}}</a>
	                        </div>
	                        <div class="price1">{{$bc->price_promotion}} đ</div>
	                        <div class="phathanh">Phát hành: {{$bc->date_release}}<b></b></div>
	                        <br>
	                        <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(12060,1);" class="buy1 listprocart">Đặt hàng</a>
	                        </p>
	                    </li>
					@endif
                @endforeach
            </ul>
            {{$bookcategory->links()}}
        </div>
    </div>
</div>  
@endsection