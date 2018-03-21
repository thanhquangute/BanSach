<div class="dm1">
    <div class="dm1t">DANH MỤC NXB</div>
    <ul style="margin-left: -20px;">
        @foreach($publisher as $pl)
        <li>
            <h2><a href="sach-theo-nha-xuat-ban-{{$pl->id}}" title="{{$pl->publisher_name}}">{{$pl->publisher_name}}</a></h2>
        </li>
        @endforeach
    </ul>
</div>