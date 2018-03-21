<div class="tab-pane fade  in" id="sachgiamgia">
    <ul class="list1 clearfix">
    @foreach($bookpromotion as $bsa)
        <li>
            <div class="listpro-saleoff" style="background: url(image/icon-giam-gia.png);">-{{$bsa->discount}}%</div>
            <div class="list1img">
                <a href="thong-tin-sach-{{$bsa->id}}" title="{{$bsa->book_name}}"><img class="lazy" data-original="image/sach/{{$bsa->image}}" alt="{{$bsa->book_name}}" src="image/sach/{{$bsa->image}}" style="display: inline;">
                </a>
            </div>
            <div class="list1a1"><a href="thong-tin-sach-{{$bsa->id}}" title="{{$bsa->book_name}}">{{$bsa->book_name}}</a>
            </div>
            <!--
                 -->
            <div class="price1">{{$bsa->price_promotion}} đ</div>
            <div class="priceold">{{$bsa->price}} đ</div>
            <div class="phathanh">Phát hành: <b>{{$bsa->date_release}}</b>
            </div>
            <br>
            <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(11931,1);" class="buy1 listprocart">Đặt hàng</a>
            </p>
        </li>
        @endforeach
    </ul>
    <div>
        <p align="right"><a href="sach-giam-gia" title="Sách Giảm giá" class="viewmore">Xem tất cả &gt;&gt;</a>
        </p>
    </div>  
</div>