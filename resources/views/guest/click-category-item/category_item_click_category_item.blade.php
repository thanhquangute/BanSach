<div class="dm1">
    <div class="dm1t">DANH MỤC SẢN PHẨM</div>
    <ul style="margin-left: -20px;">
        @foreach($getcategoryitem as $gi)
        	@if($gi->category_id == $categoryitem->category_id)
                <li>
                    <h2><a href="sach-theo-danh-muc-{{$gi->id}}" title="Truyện Tranh Tuần">{{$gi->category_name_item}}</a></h2>
                </li>
           @endif
       @endforeach
    </ul>
</div>