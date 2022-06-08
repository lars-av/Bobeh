@if ($fc['enable'] == 'true')
<section class="wrapper-frontpage house-slider">
    <h2>Our houses</h2>
    <div class="slideshow-container">
        <div class="swiper slideShow">
          <div class="swiper-wrapper">

            @php $house_list = Houses::House(-1) @endphp
            @foreach ($house_list as $house)
            <div class="swiper-slide">
                <div class="slider-house">
                    <div class="slider-text-container">
                        <div class="slider-container">
                        <h3>{{$house['houseInformation']['house_name']}}</h3>
                        <p>
                          {{$house ['houseInformation']['house_description']}}
                        </p>
                        </div>
                        <a class="btnRounded" href="">See house</a>
                    </div>
                    <div class="slider-image-container">
                        <img src={{$house['featured-image']}} alt="">
                    </div>

                </div>
                </div>
            @endforeach
          </div>
        </div>
        <div class="swiper-pagination"></div>
          </div>
    </section>
@endif

