@extends('guest.click-publisher-author.index')
@section('content')
<div class="col2">
    <div class="n3t clearfix">
        <h4><strong>{{$publisherid->publisher_name}}</h4></strong>
    </div>
    <div class="default">
        <div class="dmslider carousel">
            <ul class="list1 clearfix" style="margin-right: -60px;">
               	@foreach($bookpublisher as $pl)
               		@if($pl->publisher_id == $publisherid->id)
	                    <li>
	                        <div class="list1img">
	                            <a href="thong-tin-sach-{{$pl->id}}" title="{{$pl->book_name}}"><img class="lazy" data-original="image/sach/{{$pl->image}}" alt="{{$pl->book_name}}" src="image/sach/{{$pl->image}}" style="display: inline;">
	                            </a>
	                        </div>
	                        <div class="list1a1"><a href="thong-tin-sach-{{$pl->id}}" title="">{{$pl->book_name}}</a>
	                        </div>
	                        <div class="price1">{{$pl->price_promotion}} đ</div>
	                        <div class="phathanh">Phát hành: {{$pl->date_release}}<b></b></div>
	                        <br>
	                        <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(12060,1);" class="buy1 listprocart">Đặt hàng</a>
	                        </p>
	                    </li>
	                @endif
				@endforeach
            </ul>
             {{$bookpublisher->links()}}
        </div>
    </div>
</div> 
@endsection