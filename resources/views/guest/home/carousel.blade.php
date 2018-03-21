<div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
          <img src="image/banner/{{$carouselfirst->image_carouser}}">
        </div>
        @foreach($carouselsecond as $cs2)
          <div class="item">
              <img src="image/banner/{{$cs2->image_carouser}}">
          </div>
        @endforeach
        @foreach($carouselthree as $cs3)
          <div class="item">
              <img src="image/banner/{{$cs3->image_carouser}}">
          </div>
        @endforeach
        @foreach($carouselfour as $cs4)
          <div class="item">
              <img src="image/banner/{{$cs4->image_carouser}}">
          </div>
        @endforeach
      </div>
      <ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">{{$carouselfirst->carousel_name}}</a></li>
          @foreach($carouselsecond as $cs2)  
            <li data-target="#myCarousel" data-slide-to="1" class="active"><a href="#">{{$cs2->carousel_name}}</a></li>
          @endforeach
          @foreach($carouselthree as $cs3)  
            <li data-target="#myCarousel" data-slide-to="2" class="active"><a href="#">{{$cs3->carousel_name}}</a></li>
          @endforeach
          @foreach($carouselfour as $cs4)  
            <li data-target="#myCarousel" data-slide-to="3" class="active"><a href="#">{{$cs4->carousel_name}}</a></li>
          @endforeach
      </ul>
    </div>
</div>