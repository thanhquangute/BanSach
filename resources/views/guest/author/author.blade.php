<div class="dm1">
    <div class="dm1t">DANH MỤC TÁC GIẢ</div>
    <ul style="margin-left: -20px;">
        @foreach($author as $au)
        <li>
            <h2><a href="sach-theo-tac-gia-{{$au->id}}" title="{{$au->author_name}}">{{$au->author_name}}</a></h2>
        </li>
        @endforeach
    </ul>
</div>