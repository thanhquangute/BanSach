<div class="tab-pane fade active in" id="sachnuoidaycon">
     <ul class="list1 clearfix">
        @foreach($bookcategory7 as $bc)
                <li>
                @foreach($booksaleall as $bs)
                    @if($bc->id == $bs->book_id)  
                        <div class="listpro-saleoff" style="background: url(image/icon-giam-gia.png);">-{{$bs->discount}} %</div>
                    @endif
                @endforeach
                <div class="list1img">
                    <a href="thong-tin-sach-{{$bc->id}}" title="{{$bc->book_name}}"><img class="lazy" data-original="image/sach/{{$bc->image}}" alt="{{$bc->book_name}}" src="image/sach/{{$bc->image}}" style="display: inline;">
                    </a>
                </div>
                <div class="list1a1"><a href="thong-tin-sach-{{$bc->id}}" title="{{$bc->book_name}}">{{$bc->book_name}}</a>
                </div>
                @if($bc->price == $bc->price_promotion)
                    <div class="price1">{{$bc->price}} đ</div>
                    <br>
                    @else
                    <div class="price1">{{$bc->price_promotion}} đ</div>
                    <div class="priceold">{{$bc->price}} đ</div>
                @endif
                <div class="phathanh">Phát hành: {{$bc->date_release}}<b></b>
                </div>
                <br>
                <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(11931,1);" class="buy1 listprocart">Đặt hàng</a>
                </p>
            </li>
        @endforeach
    </ul>
    <div>
        <p align="right"><a href="danh-muc-7" title="Truyện tranh" class="viewmore">Xem tất cả &gt;&gt;</a>
        </p>
    </div>
</div>