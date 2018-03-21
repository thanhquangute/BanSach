<div class="quatang clearfix"  style="padding-right: -100px;">
    <div class="qttab" style="height: auto;">
        @foreach($category_item as $ct)
        	@if($ct->category_id == 4)
				<h3><a href="sach-theo-danh-muc-{{$ct->id}}" title="{{$ct->category_name_item}}">{{$ct->category_name_item}}</a></h3>
        	@endif
        @endforeach
    </div>
    <div class="qthot">
       @foreach($bookcategoryfirst as $ct)
        	@if($ct->category_id == 4)
	        <a href="thong-tin-sach-{{$ct->id}}" title="{{$ct->book_name}}" class="qthota">{{$ct->book_name}}<br></a>
	        <a href="thong-tin-sach-{{$ct->id}}" title="{{$ct->book_name}}"><img style="width: 100%; display: inline;" class="lazy" data-original="image/sach/{{$ct->image}}" alt="{{$ct->book_name}}" src="image/sach/{{$ct->image}}">
	        </a>
	        <div class="pricec2">
           		@if($ct->price == $ct->price_promotion)
					<div class="price1">{{$ct->price}} đ</div>
           		@else
                	<div class="price1">{{$ct->price_promotion}} đ</div>
                	<div class="priceold">{{$ct->price}} đ</div>
                @endif
            </div>
	        <a href="javascript:void(0)" onclick="javascript:return UpdateProduct(9650,1);" class="buy1">Đặt mua</a>
	       	@endif
	    @endforeach
    </div>
    <ul class="pilist2 clearfix">
        @foreach($bookcategory4 as $bc)
	        @if($bc->category_id == 4)
				<li>
				@foreach($booksaleall as $bs)
        			@if($bc->id == $bs->book_id)  
	            		<div class="listpro-saleoff" style="background: url(image/icon-giam-gia.png);">-{{$bs->discount}}%</div>
	            	@endif
	           	@endforeach
		            <a href="thong-tin-sach-{{$bc->id}}" title="{{$bc->book_name}}"><img class="lazy" data-original="image/sach/{{$bc->image}}" alt="{{$bc->book_name}}" src="image/sach/{{$bc->image}}" style="display: inline;">
		            </a>
		            <a href="thong-tin-sach-{{$bc->id}}" title="{{$bc->book_name}}" class="a2">{{$bc->book_name}}</a>
		            <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(11956,1);" class="buy2 listprocart">Đặt hàng</a>
		            </p>
		            <div class="pricec2">
		           		@if($bc->price == $bc->price_promotion)
							<div class="price1">{{$bc->price}} đ</div>
		           		@else
		                	<div class="price1">{{$bc->price_promotion}} đ</div>
		                	<div class="priceold">{{$bc->price}} đ</div>
		                @endif
		            </div>
		            <br>
		        </li>
	        @endif
	    @endforeach
    </ul>
</div>