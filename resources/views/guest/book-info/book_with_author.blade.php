
	<div class="n3t clearfix">
		@foreach($book_detail as $ct)
			    <a class="more" href="sach-theo-tac-gia-{{$ct->author_id}}">Xem tất cả <img src="image/more.jpg" alt="Xem tất cả"></a>
			    <a href="sach-theo-tac-gia-{{$ct->author_id}}">Sách cùng tác giả</a>
	    @endforeach
	</div>
	<div class="dmslider">
	    <ul class="list1 clearfix">
	    	@foreach($bookauthor as $ba)
	        	@foreach($book_detail as $ct)
	       			@if($ba->author_id == $ct->author_id)
	       			<li>
	       				@foreach($booksaleall as $bs)
			                @if($ba->book_id == $bs->book_id)  
			                    <div style=" position: absolute;width:36px;height:26px;background:url(image/icon-giam-gia.png);color:#fff;float:right;border-radius:3px;margin-left:105px;text-align:center;padding-top:5px">
			                -{{$bs->discount}}%
			            </div>
			                @endif
			            @endforeach
			            <div class="list1img">
			                <a href="thong-tin-sach-{{$ba->book_id}}" title="{{$ba->book_name}}"><img class="lazy" data-original="image/sach/{{$ba->image}}" alt="{{$ba->book_name}}" src="image/sach/{{$ba->image}}" style="display: inline;">
			                </a>
			            </div>
			            <div class="list1a1"><a href="thong-tin-sach-{{$ba->book_id}}" title="{{$ba->book_name}}">{{$ba->book_name}}</a>
			            </div>
			            <div class="price1">{{$ba->price_promotion}} đ</div>
			            <div class="priceold">{{$ba->price}} đ</div>
			            <div class="phathanh" style="font-size: 12px;">Phát hành: <b>{{$ba->date_release}}</b>
			            </div>
			            <br>
			            <p align="center"><a href="javascript:void(0)" onclick="javascript:return UpdateProduct(11931,1);" class="buy1" style="margin-top:0px;background:#299ae0;width:70px;height:28px;line-height:28px;font-size:12px">Đặt hàng</a>
			            </p>
	        		</li>
	        		@endif
	        	@endforeach
	        @endforeach
	    </ul>

	</div>
