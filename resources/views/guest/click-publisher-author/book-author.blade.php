@extends('guest.click-publisher-author.index')
@section('content')
<div class="col2">
    <div class="n3t clearfix">
        <h4><strong>{{$authorid->author_name}}</strong></h4>    
    </div>
    <div class="default">
        <div class="dmslider carousel">
            <ul class="list1 clearfix" style="margin-right: -60px;">
               	@foreach($bookauthor as $ba) 
            		@if($ba->author_id == $authorid->id)
	                    <li>
	                        <div class="list1img">
	                            <a href="thong-tin-sach-{{$ba->id}}" title=""><img class="lazy" data-original="image/sach/{{$ba->image}}" alt="{{$ba->book_name}}" src="image/sach/{{$ba->image}}" style="display: inline;">
	                            </a>
	                        </div>
	                        <div class="list1a1"><a href="thong-tin-sach-{{$ba->id}}" title="">{{$ba->book_name}}</a>
	                        </div>
	                        <div class="price1">{{$ba->price_promotion}} đ</div>
	                        <div class="phathanh">Phát hành: {{$ba->date_release}}<b></b></div>
	                        <br>
	                        <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(12060,1);" class="buy1 listprocart">Đặt hàng</a>
	                        </p>
	                    </li>
 					@endif
				@endforeach
            </ul>
            {{$bookauthor->links()}}
        </div>
    </div>
</div> 

@endsection