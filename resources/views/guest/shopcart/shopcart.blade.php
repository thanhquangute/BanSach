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
    <link rel="stylesheet" href="css/cart.css"/>
    <link rel="stylesheet" href="css/client.css"/>
    <script src="Javascript/cart.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
     <script type="text/javascript">
        $(document).ready(function () {
                $('.btnThanhToanDonHang').click(function () {
                    $('.thanhtoandonhang').show();
                });

                $('#btnTroVeGioHang').click(function () {
                    $('.thanhtoandonhang').hide();
                });
        });

    </script>
</head>
<body>
    @include('guest.home.header')
    <div class="container" style="padding-top: 50px">
        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="glyphicon glyphicon-shopping-cart"></i> <strong>Giỏ hàng của tôi</strong>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Hình</th>
                                    <th>Sản phẩm </th>
                                    <th>SL</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <form method="POST" action="">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                @foreach($content as $ct)
                                <tr>
                                    <td class="cell-center  ">
                                        <a href="#"><img src="image/sach/{{$ct->options->img}}" style="max-width: 80px; max-height:60px;" alt="" title=""></a>
                                    </td>
                                    <td>
                                        <a href="">{{$ct->name}}</a>
                                    </td>
                                    <td>
                                        
                                            <input type="number" class="form-control qty" value="{{$ct->qty}}" min="0" max="10" step="1" class=""/>
                                    
                                    </td>
                                    <td>{{number_format($ct->price),2}}</td>
                                    <td class="product_subtotal">{{number_format($ct->price*$ct->qty),2}}</td>
                                    <td>
                                        <div class="numberbuttoncart btn-group btn-group-xs gia">
                                            <a href="xoa-san-pham/{{$ct->rowId}}" class="btn btn-danger btn-delete-cart">Xóa</a>
                                            <a href="" data-original-title="Update" class="btn btn-warning btn-update-cart" id="{{$ct->rowId}}">Cập nhật</a>
                                            
                                           <!-- 
                                           <button rowid="{{$ct->rowId}}" type="button" class="btn btn-warning btn-update-cart">Cập nhật</button>
                                            <button rowid="46c3962b91d458045b71143dc3753955" type="button" class="btn btn-danger btn-delete-cart">Xóa</button>-->
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </form>
                            </tbody>
                        </table>
                    </div>
                    <strong style="float: right">Tổng cộng :<span id="total_price_cart">{{($total)}}</span> đ</strong>
                </div>
            </div>
            <div>
                <a href="http://localhost:8090/PiBookVer2/public/" class="btn btn-primary" style="margin-left:30%">Tiếp tục mua hàng</a>
                <button class="btn btn-warning btnThanhToanDonHang" id="btnThanhToanDonHang">Đặt hàng và thanh toán</button>
            </div>
        </div>

        <div class="col-md-4 thanhtoandonhang" style="display: none">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="glyphicon glyphicon-piggy-bank"></i> <strong>Thanh toán đơn hàng</strong>
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="gio-hang" method="post" id="form-payment">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group" name="cart">

                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">Họ và tên(*):</label>
                            <input type="text" class="form-control" placeholder="Họ và tên" name="name">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email(*):</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="address">Địa chỉ(*):</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" name="address">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="phone">Số điện thoại(*):</label>
                            <input type="text" class="form-control" placeholder="Số điện thoại" name="phone">
                        </div>
                        <input type="hidden" name="_token" value="VSSQXpyIBkWkdNcQi6qnIvz8gBg15hHXafhPgTvp">
                        <button onclick="return confirm('Bạn có chắc chắn muốn đặt hàng?')" type="submit" class="btn btn-primary">Xác nhận</button>
                        <button id="btnTroVeGioHang" class="btn btn-warning" type="button">Trở về</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('guest.home.footer')
</body>
</html>