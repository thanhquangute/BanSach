	<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <script src ="Javascript/jquery.min.js"></script>
    <script src ="bootstrap/js/bootstrap.min.js "></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/guest/carousel.css"/>
    <link rel="stylesheet" href="css/1header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <script src ="Javascript/carousel.js"></script>
</head>
<body>
	@include('guest.home.header')
	<div class="container" style="padding-top: 20px;">
		<div class="row">
			<div class="col-md-3 category">
			    @include('guest.category.category')
			</div>
			<div class="col-md-9" style="margin-right: -100px;">
	            @include('guest.home.carousel')
			</div>
		</div>
	</div>
	<div class="sach container" style="padding-top: 40px;">
		<div class=" clearfix">
			<ul class="nav nav-tabs">
		        <li class="active book-new"><a href="#sachmoi" class="act3" data-toggle="tab">Sách mới</a>
		        </li>
		        <li class="book-new"><a href="#sachphathanh" data-toggle="tab">Sắp phát hành</a>
		        </li>
		        <li class="book-new"><a href="#sachgiamgia" data-toggle="tab">Sách giảm giá</a>
		        </li>
		        <li class="book-new"><a href="#sachbanchay" data-toggle="tab">Sắp bán chạy</a>
		        </li>
		    </ul>
		</div>
		<div id="myTabContent" class="tab-content">
			
	        @include('guest.book-new.book_new')
	        @include('guest.book-release.book_release')
	        @include('guest.book-promotion.book_promotion')
	        <div class="tab-pane fade  in" id="sachbanchay">
	        	<ul class="list1 clearfix">
			        <li>
			            <div class="listpro-saleoff">-20 %</div>
			            <div class="list1img">
			                <a href="blockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu" title="Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử"><img class="lazy" data-original="uploads/products/92324_01_12_17_blockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu.jpg" alt="Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử" src="uploads/products/92324_01_12_17_blockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu.jpg" style="display: inline;">
			                </a>
			            </div>
			            <div class="list1a1"><a href="blockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu" title="Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử">Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử</a>
			            </div>
			            <!--
			                 -->
			            <div class="price1">88,000 đ</div>
			            <div class="priceold">110,000 đ</div>
			            <div class="phathanh">Phát hành: <b>01-12-2017</b>
			            </div>
			            <br>
			            <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(11931,1);" class="buy1 listprocart">Đặt hàng</a>
			            </p>
			        </li>
			    </ul>
			    <div>
			        <p align="right"><a href="sach-ban-chay-p514.html" title="Sách bán chạy" class="viewmore">Xem tất cả &gt;&gt;</a>
			        </p>
			    </div>      
	        </div>
		</div>
	</div>
	<div class="book-review container">
		@include('guest.book-review.book-review')
	</div>
	<div class="truyentranh container" style="padding-top: 40px;">
		<div class=" clearfix">
			<ul class="nav nav-tabs">
				@foreach($category as $ct)
					@if($ct->id == 1)
				        <li class="active book-new"><a href="#truyentranh" class="act3" data-toggle="tab">{{$ct->category_name}}</a>
				        </li>
			        @endif
			        @if($ct->id == 2)
				        <li class=" book-new"><a href="#sachvanhoc" class="act3" data-toggle="tab">{{$ct->category_name}}</a>
				        </li>
			        @endif
			        @if($ct->id == 7)
				        <li class=" book-new"><a href="#sachnuoidaycon" class="act3" data-toggle="tab">{{$ct->category_name}}</a>
				        </li>
			        @endif
			        @if($ct->id == 3)
				        <li class=" book-new"><a href="#sachkinhte" class="act3" data-toggle="tab">{{$ct->category_name}}</a>
				        </li>
			        @endif
		        @endforeach
		    </ul>
		</div>
		<div id="myTabContent" class="tab-content">
			@include('guest.book-comic.book_comic')
			@include('guest.book-literature.book_literature')
			@include('guest.book-parenting.book_parenting')
			@include('guest.book-economic.book_economic')
		</div>
	</div>
	<div class="onthidaihoc container">
		<div class="pitab1x clearfix">
		    @foreach($category as $ct)
				@if($ct->id == 4)
		    		<a href="danh-muc-4" class="act3 qt">{{$ct->category_name}}</a>
		    	@endif
		    @endforeach
		    <a href="danh-muc-4" title="{{$ct->category_name}}" class="more" style="float:right">Xem tất cả <img src="image/more.jpg" alt="Xem tất cả"></a>
		</div>
		@include('guest.book-examination.book_examination')
	</div>
	<div class="lichdeban container">
		<div class="pitab1x clearfix">
		    @foreach($category as $ct)
				@if($ct->id == 5)
		    		<a href="danh-muc-5" class="act3 qt">{{$ct->category_name}}</a>
		    	@endif
		    @endforeach
		    <a href="danh-muc-5" title="Sách Ôn Thi Đại Học" class="more" style="float:right">Xem tất cả <img src="image/more.jpg" alt="Xem tất cả"></a>
		</div>
		@include('guest.book-stationery.book_stationery')
	</div>
	@include('guest.home.footer')
</body>
</html>