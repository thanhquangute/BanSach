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
		        @include(guest.category-item.category_item)
		        @include('guest.click-category.top_sell')
		        <br><br>
		        @include('guest.publisher.publisher')
		        <br><br>
		        @include('guest.author.author')
		    </div>
		    @yield('content-category')
		</div>
	</div>
</body>
</html>