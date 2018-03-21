<div class="tab-pane fade active in" id="sachmoi">
    <ul class="list1 clearfix">
    	@foreach($booknew as $bn)
	        <li>
	        	@foreach($booksaleall as $bs)
        			@if($bn->id == $bs->book_id)  
	            		<div class="listpro-saleoff" style="background: url(image/icon-giam-gia.png);">-{{$bs->discount}}%</div>
	            	@endif
	           	@endforeach
	            <div class="list1img">
	                <a href="thong-tin-sach-{{$bn->id}}" title="{{$bn->book_name}}"><img class="lazy" data-original="image/sach/{{$bn->image}}" alt="{{$bn->book_name}}" src="image/sach/{{$bn->image}}" style="display: inline;">
	                </a>
	            </div>
	            <div class="list1a1"><a href="thong-tin-sach-{{$bn->id}}" title="{{$bn->book_name}}">{{$bn->book_name}}</a>
	            </div>
	             @if($bn->price == $bn->price_promotion)
	            	<div class="price1">{{$bn->price}} đ</div>
	            	<br>
	            	@else
	            	<div class="price1">{{$bn->price_promotion}} đ</div>
	            	<div class="priceold">{{$bn->price}} đ</div>
	            @endif
	            <div class="phathanh">Phát hành: {{$bn->date_release}}<b></b>
	            </div>
	            <br>
	            <p align="center"><a rel="noindex, nofollow" href="mua-hang/{{$bn->id}}" onclick="" class="buy1 listprocart">Đặt hàng</a>
	            </p>
	        </li>
	    @endforeach
    </ul>
    <div>
        <p align="right"><a href="sach-moi" title="Sách bán chạy" class="viewmore">Xem tất cả &gt;&gt;</a>
        </p>
    </div>
</div>