<div class="tab-pane fade in" id="sachphathanh">
    <ul class="list1 clearfix">
    	@foreach($bookreleased as $br)
	        <li>
	        	@foreach($booksaleall as $bs)
        			@if($br->id == $bs->book_id)  
	            		<div class="listpro-saleoff" style="background: url(image/icon-giam-gia.png);">-{{$bs->discount}}%</div>
	            	@endif
	           	@endforeach
	            <div class="list1img">
	                <a href="thong-tin-sach-{{$br->id}}" title="{{$br->book_name}}"><img class="lazy" data-original="image/sach/{{$br->image}}" alt="{{$br->book_name}}" src="image/sach/{{$br->image}}" style="display: inline;">
	                </a>
	            </div>
	            <div class="list1a1"><a href="thong-tin-sach-{{$br->id}}" title="{{$br->book_name}}">{{$br->book_name}}</a></div>
	            <div class="price1">{{$br->price_promotion}} đ</div>
	            <div class="priceold">{{$br->price}} đ</div>
	            <div class="phathanh">Phát hành: {{$br->date_release}}<b></b>
	            </div>
	            <br>
	            <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(11931,1);" class="buy1 listprocart">Đặt hàng</a>
	            </p>
	        </li>
	    @endforeach
    </ul>
    <div>
        <p align="right"><a href="sach-sap-phat-hanh" title="Sách bán chạy" class="viewmore">Xem tất cả &gt;&gt;</a>
        </p>
    </div>
</div>