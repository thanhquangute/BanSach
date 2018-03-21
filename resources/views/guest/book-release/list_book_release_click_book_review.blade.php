@extends('guest.click-publisher-author.index')
@section('content')
<div class="col2">
    <div class="n3t clearfix">
        <h4><strong>Sách sắp phát hành</strong></h4>    
    </div>
    <div class="default">
        <div class="dmslider carousel">
            <ul class="list1 clearfix" style="margin-right: -60px;">
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
                <p align="center"><a rel="noindex, nofollow" href="javascript:void(0)" onclick="javascript:return UpdateProduct(11931,1);" class="buy1 listprocart">Đặt hàng</a>
                </p>
            </li>
        @endforeach
            </ul>
            {{$bookrelease->links()}}
        </div>
    </div>
</div> 
@endsection