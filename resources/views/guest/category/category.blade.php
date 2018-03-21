<p id="name-catelogy"><span class="fa fa-list-ul" style="font-size: 20px;color: orange;"></span> TẤT CẢ DANH MỤC </p>
	<hr>
	<ul style="list-style: none;margin-left:-30px;">
		@foreach($category as $ct)
			<li id="list-danhmuc"><a href="danh-muc-{{$ct->id}}" id="list-danhmuc">{{$ct->category_name}}</a><span class="fa fa fa-chevron-right" style="float: right; color: #f1f1f1; padding-top: 3px;"></span></li><hr>
		@endforeach
	</ul>