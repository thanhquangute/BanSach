<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <script src ="Javascript/jquery.min.js"></script>
    <script src ="Javascript/carousel.js"></script>
    <script src ="bootstrap/js/bootstrap.min.js "></script>
    <link rel="stylesheet" href="css/1header.css"/> 
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
<body>
	@include('guest.home.header')
	<div class="danhmucon container">
		<div class="cont clearfix">
		    <div class="tip1">
		        <a href="">Trang chủ</a><span>/</span>
		        <span><a href="sach" title="Sách">Sách</a></span> <span>/</span> <span><a href="truyen-tranh-manga-p525.html-525" title="Truyện tranh - Manga">Truyện tranh - Manga</a></span>
		    </div>
		    <div class="col1">
		        <div class="dm1">
		            <div class="dm1t">DANH MỤC SẢN PHẨM</div>
		            <ul style="margin-left: -20px;">
		                <li>
		                    <h2><a href="sach-moi" title="Sách mới">Sách mới</a></h2>
		                </li>
		                <li>
		                    <h2><a href="" title="Sách bán chạy">Sách bán chạy</a></h2>
		                </li>
		                <li>
		                    <h2><a href="sach-giam-gia" title="Sách bán chạy">Sách giảm giá</a></h2>
		                </li>
		                <li>
		                    <h2><a href="" title="Sách ảnh">Sách ảnh</a></h2>
		                </li>
		                <li>
		                    <h2><a href="" title="Truyện Tranh Tuần">Sách</a></h2>
		                </li>
		                <li>
		                    <h2><a href="" title="Truyện Tranh Tuần">Phụ Kiện Manga - Anime</a></h2>
		                </li>
		                <li>
		                    <h2><a href="danh-muc-5" title="Truyện Tranh Tuần">Văn Phòng Phẩm</a></h2>
		                </li>
		                <li>
		                    <h2><a href="danh-muc-6" title="Truyện Tranh Tuần">Quà Tặng</a></h2>
		                </li>
		                <li>
		                    <h2><a href="sach-khuyen-doc" title="Truyện Tranh Tuần">Sách Pibook khuyên đọc</a></h2>
		                </li>
		            </ul>
		        </div>
		        @include('guest.click-category.top_sell')
		        <br><br>
		        @include('guest.publisher.publisher')
		        <br><br>
		        @include('guest.author.author')
		    </div>
		   	@yield('content')
		</div>
	</div>
	@include('guest.home.footer')
</body>
</html>