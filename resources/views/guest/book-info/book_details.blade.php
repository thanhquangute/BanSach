<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <script src = "Javascript/jquery.min.js"></script>
    <script src = "Javascript/carousel.js"></script>
    <script src = "bootstrap/js/bootstrap.min.js "></script>
    <link rel="stylesheet" href="css/danhmuc.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <div class="wrap1">
        @include('guest.home.header')
        <div class="cont clearfix">
		    <div class="tip1">
		        <a href="index.php">Trang chủ</a><span>/</span>
		        <span><a href="sach" title="Sách">Sách</a></span> <span>/</span> <span><a href="sach-kinh-te-p527.html" title="Sách Kinh Tế">Sách Kinh Tế</a></span> <span>/</span> <span><a href="kinh-te-kinh-doanh" title="Kinh tế - Kinh doanh">Kinh tế - Kinh doanh</a></span> <span>/</span> Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử
		    </div>
		    <div class="sachct clearfix">
		   	 	@foreach($book_detail as $ct)
		        <div class="sachct1">
		            <div id="gallery">
		                <a href="image/sach/{{$ct->image}}"><img class="lazy" data-original="image/sach/{{$ct->image}}" alt="{{$ct->book_name}}" src="image/sach/{{$ct->image}}" style="display: inline;">
		                </a>
		                <br>
		                <div>
		                    <a href="image/sach/{{$ct->image}}"><img alt="no name" id="img_01" class="lazy" data-original="image/sach/{{$ct->image}}" style="width: 50px; float: left; margin-right: 10px; display: block;" src="image/sach/{{$ct->image}}"> </a>
		                </div>
		            </div>
		            <br>
		            <br>
		            <div class="fb-like fb_iframe_widget" data-href="http://pibook.vn/blockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu" style="margin-top:20px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=235&amp;href=http%3A%2F%2Fpibook.vn%2Fblockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true">
		            	<span style="vertical-align: bottom; width: 450px; height: 24px;">
		            		<iframe name="f52534e9e6031" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.3/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df1c7c03af64d2f4%26domain%3Dpibook.vn%26origin%3Dhttp%253A%252F%252Fpibook.vn%252Ff3a4c658a69e8f4%26relation%3Dparent.parent&amp;container_width=235&amp;href=http%3A%2F%2Fpibook.vn%2Fblockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 450px; height: 24px;" class=""></iframe>
		            	</span>
		            </div>
		            <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 24px; height: 15px;">
		               	<iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 24px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 15px;" tabindex="0" vspace="0" width="100%" id="I0_1513867682589" name="I0_1513867682589" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=small&amp;annotation=inline&amp;width=300&amp;hl=vi&amp;origin=http%3A%2F%2Fpibook.vn&amp;url=http%3A%2F%2Fpibook.vn%2Fblockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.LE3NRPgDw-c.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCORYMfr3A5BFAWCiXy3RsCDHkKV0w#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1513867682589&amp;_gfid=I0_1513867682589&amp;parent=http%3A%2F%2Fpibook.vn&amp;pfname=&amp;rpctoken=87867333" data-gapiattached="true" title="G+">
		               		
		               	</iframe>
		            </div>
		        </div>
		        <div class="sachct2" style="margin-top: -30px;">
		            <h1><strong>{{$ct->book_name}}</strong></h1>
		            <div class="status1" style="background: url(image/i5.jpg) no-repeat 0 0;">Tình trạng: <b>{{$ct->status_book}}</b>
		            </div>
		            <ul class="pilist5">
		                <li class="clearfix">
		                    <div class="row" >
								<div class="col-md-3">
									<div class="pilist5d">Tác giả</div>
								</div>
								<div class="col-md-9" style="margin-top: -20px;">
									<h2 class="dpro-author" style="margin-left: 15px;"><a href="tac-gia/mark-gates-t4081.html">{{$ct->author_name}}</a></h2>
								</div>
		                    </div>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Giá bìa</div>
		                    {{$ct->price}} ₫
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Tại Pibook </div>
		                    <span class="price3">{{$ct->price_promotion}} <sup>₫</sup></span>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Nhà phát hành</div>
		                    <a href="nha-phat-hanh/1980-books-n89.html">{{$ct->publisher_name}}</a>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Kích thước</div>
		                    <a>{{$ct->size}}</a>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Trọng lượng vận chuyển</div>
		                    <a>{{$ct->weight}}</a>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Số trang</div>
		                    <a>{{$ct->page_number}}</a>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Định dạng bìa</div>
		                    <a>{{$ct->format_cove_book}}</a>
		                </li>
		                <li class="clearfix">
		                    <div class="pilist5d">Phát hành</div>
		                    <a>{{$ct->date_release}}</a>
		                </li>
		            </ul>
		            <div class="ctsachkm">
		                <div class="ctsachkmt"><span>THÔNG TIN KHUYẾN MẠI</span>
		                </div>
		                <ul class="">
		                    <ul style="margin-left: -60px;">
		                        <li style="background: url(image/tich.jpg) no-repeat 0 3px;">Giao hàng trong 24h tại khu vực nội thành Hà Nội</li>
		                         <li style="background: url(image/tich.jpg) no-repeat 0 3px;">Bọc bìa Plastic Miễn Phí cho tất cả sách bìa mềm phù hợp với Chính sách và Quy cách bọc</li>
		                         <li style="background: url(image/tich.jpg) no-repeat 0 3px;">Đóng gói 3 lớp cực kỳ cẩn thận cho đơn hàng sách ở xa. (Ngoài kv nội thành)</li>
		                    </ul>
		                </ul>
		            </div>
		            <form action="addcart.php" method="GET">
		                <input type="hidden" name="id" value="11931">
		                <div class="buy2 clearfix">
		                    <div class="buy2a">
		                        SỐ LƯỢNG
		                        <select name="quantity" id="quantity">
		                            <option value="1">1</option>
		                            <option value="2">2</option>
		                            <option value="3">3</option>
		                            <option value="4">4</option>
		                            <option value="5">5</option>
		                            <option value="6">6</option>
		                            <option value="7">7</option>
		                            <option value="8">8</option>
		                            <option value="9">9</option>
		                            <option value="10">10</option>
		                        </select>
		                    </div>
		                    <div class="buy2b">
		                        <script>
		                            function addcart_pro(pId) {
		                                var selected_quantity = $('#quantity :selected').val();
		                                UpdateProduct(pId, selected_quantity);
		                            }
		                        </script>
		                        <a href="javascript:void(0)" onclick="javascript:return addcart_pro(11931);"><img src="image/buy-now.jpg" alt="order">
		                        </a>
		                    </div>
		                    <div class="buy2b">
		                        <a href="javascript:alert('Vui lòng đăng nhập để sử dụng chức năng này!')" title="Thêm vào danh mục ưu thích"><img src="image/buy2b.jpg" alt="Thêm vào danh mục ưu thích">
		                        </a>
		                    </div>
		                </div>
		            </form>
		        </div>
		        @include('guest.book-info.guide_shopping')
		    @endforeach
		    </div>
		    <br>
		    <br>
		    @include('guest.book-info.book_usually_buy')
		    <br>
		    <br>
		    <div class="gioithieus clearfix">
		        <div class="col2">
		            <div class="n3t clearfix" style="padding-bottom:10px;">
		                <a href="" style="font-size:14px;">GIỚI THIỆU</a>
		            </div>
		            <div class="dmabout">
		                <h2 style="text-align: justify;">Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử</h2>
		                <p style="text-align: justify;">Tiền điện tử, với đại diện tiêu biểu nhất là Bitcoin, đang là mối quan tâm hàng đầu của giới tài chính toàn cầu. Khả năng thanh toán bằng tiền ảo mở ra hàng loạt tiềm năng cho thương mại và thay đổi toàn diện thói quen tiêu dùng của con người. Hạt nhân của công nghệ hứa hẹn rung chuyển thế giới này được gọi là <strong>Blockchain</strong>.</p>
		                <p style="text-align: justify;"><strong>Blockchain</strong> được giới công nghệ đánh giá là phát kiến vĩ đại nhất sau khi mạng Internet ra đời. Ứng dụng phổ biến nhất của nó là các loại tiền điện tử nổi tiếng (Bitcoin, Ethereum, Ripple...) đang làm mưa làm gió trên thị trường. Nhưng nghịch lý là, lại rất ít người nắm được bản chất của tiền điện tử và <strong>Blockchain</strong>. Rốt cuộc, <strong>Blockchain</strong> là gì? Nó hoạt động như thế nào? <strong>Blockchain</strong> thật sự là một đột phá trong công nghệ hay chỉ là một trào lưu nhất thời? <strong>Blockchain</strong> có liên hệ như thế nào với Bitcoin? Liệu <strong>Blockchain</strong> có nắm giữ tiềm năng thay đổi thế giới?...</p>
		                <p style="text-align: justify;">Thực chất, những bài viết cung cấp thông tin về <strong>Blockchain</strong> và tiền điện tử không thiếu trên các website hay mạng xã hội, nhưng lại chưa đủ tính bao quát và còn khó tiếp thu. Đó là lý do cuốn sách&nbsp;<strong>Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử,&nbsp;Hợp Đồng Thông Minh Và Tương Lai Của Tiền Tệ</strong>&nbsp;của <strong>Mark Gates</strong> ra đời. Gates cung cấp một bản tóm lược dễ hiểu nhất, cung cấp nền tảng thiết yếu cho những người mới bắt đầu và cả những ai muốn nghiên cứu sâu hơn về công nghệ <strong>Blockchain</strong> và tiền ảo. Đọc cuốn sách này, bạn sẽ hiểu được <strong>Blockchain</strong> dưới nhiều khía cạnh, trong đó không chỉ có những lời ngợi khen mà còn không thiếu các chỉ trích, bình luận trái chiều.</p>
		                <p style="text-align: justify;">***</p>
		                <div class="col2" style="text-align: justify;">
		                    <div class="dmabout">
		                        <p>Mua sách online<strong>&nbsp;<strong>Blockchain: Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử</strong></strong>&nbsp;tại Pibook.vn để được giảm giá 20%, bọc sách miễn phí và giao hàng nhanh tất cả các thành phố trên cả nước!!!</p>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <div class="col1">
		            @include('guest.click-category.top_sell')
		        </div>
		    </div>
		    <div class="fb-comments fb_iframe_widget" data-href="http://pibook.vn/blockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu" data-width="1080px" data-numposts="5" data-colorscheme="light" fb-xfbml-state="rendered"><span style="height: 176px; width: 1080px;"><iframe id="f2c6112df5b4848" name="f1d0933e87fdef8" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df394cc133438c6%26domain%3Dpibook.vn%26origin%3Dhttp%253A%252F%252Fpibook.vn%252Ff3a4c658a69e8f4%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=http%3A%2F%2Fpibook.vn%2Fblockchain-ban-chat-cua-blockchain-bitcoin-tien-dien-tu&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;skin=light&amp;version=v2.3&amp;width=1080" style="border: none; overflow: hidden; height: 176px; width: 1080px;"></iframe></span>
		    </div>
		    @include('guest.book-info.book_with_author')
		</div>
    </div>
    @include('guest.home.footer')
</body>

</html>