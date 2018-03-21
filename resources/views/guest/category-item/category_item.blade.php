<div class="dm1">
    <div class="dm1t">DANH MỤC SẢN PHẨM</div>
    <ul style="margin-left: -20px;">
        @foreach($category_item as $ci)
        <li>
            <h2><a href="sach-theo-danh-muc-{{$ci->id}}" title="{{$ci->category_name_item}}">{{$ci->category_name_item}}</a></h2>
        </li>
        @endforeach
    </ul>
</div>