<section class="no-margin">
    <div class="flex-frontpage">
    <div class=" front-title flex-center text-container-frontpage">
      <div>
        <h1 style="">Bo-og Behandlingscenter Blokhus</h1>
        {!! get_field('frontpage_paragraph') !!}
        <a class="btnRounded" style="margin-top: 1rem;" href="">See available spots</a>
      </div>
    </div>

    <div class="flex-container-frontpage image-frontpage">
        <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
    </div>
</div>
</section>

<section class="wrapper-frontpage">
<div class="flex-container-entry">
<div class="focused-entry-points">
    @php $card = get_field('entrypoint_card') @endphp
    @foreach ($card as $cards)
        <a href="{{ $cards['entrypoint_link'] }}" class="card">
            <img src="{{ $cards['entrypoint_image']['sizes']['large'] }}"
                @if ($cards['entrypoint_image']['alt']) alt="{{ $cards['entrypoint_image']['alt'] }}" @endif>
              <div class="entry-point-card-text">
                <p>{{ $cards['entrypoint_text'] }}</p>
              </div>
        </a>
    @endforeach
</div>
    <div class="about-fond-container">
       <h2>{{ get_field('about_fond_title')}} </h2>
       {!! get_field('about_fond_text') !!}
    </div>
</div>


<section class="news">
  <div class="banner-news">
    <p>We have new job listings posted</p>
    <a href="">Read more</a>
  </div>

  <h2>News</h2>
    <div class="news-card-container">
        <div class="news-card">
            <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
            <div class="news-card-text">
                <h4>Title</h4>
                <p>Short recap shortrecap</p>
            </div>
        </div>

        <div class="news-card">
            <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
            <div class="news-card-text">
                <h4>Title</h4>
                <p>Short recap shortrecap</p>
            </div>
        </div>
        <div class="news-card">
            <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
            <div class="news-card-text">
                <h4>Title</h4>
                <p>Short recap shortrecap</p>
            </div>
        </div>
    </div>
</section>
</section>

<section class="blue-section">
  <div class="wrapper-frontpage">
  <div class="target-group ">
      <div class="target-flower">
        <img src="/wp-content/themes/Bobeh/resources/assets/images/targetflower.svg" alt="">
      </div>
    <!-- Target group text -->
    <div class="target-group-description flex-center">
    <h2>Our target group HC</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit eos repudiandae a accusantium ullam aperiam assumenda? Dignissimos laudantium quaerat dolor! Fugiat unde architecto quia tenetur sapiente molestiae delectus debitis modi.</p>
    </div>


<!--Tabs v2-->

    <div class="tabs-container">

        @php
            $h = 1 @endphp
           @php $p = 1 @endphp
           @php $targetgroups = get_field('target_group_list')
         @endphp
        <ul class="tabs">
            @foreach ($targetgroups as $tgs)
            <li class="tab-link" data-tab="tab-{{$h}}">{{ $tgs['target_group_list_title'] }}</li>
            @php $h++ @endphp
            @endforeach
        </ul>
        @foreach ($targetgroups as $bgs)
        <div id="tab-{{$p}}" class="tab-content current{{$p}}">
            {!!$bgs['list_of_items'] !!}
        </div>
        @php $p++ @endphp
        @endforeach
</div>
</div>
</div>
</section>

<section class="blue-section">
  <div class="wrapper-frontpage">
    <div class=" core-values">
      <div class="values-flower">
        <img src="/wp-content/themes/Bobeh/resources/assets/images/flowervalues.svg" alt="">
      </div>
        <div class="core-values-description flex-center">
        <h2>Core values</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nihil cum alias architecto, ipsum earum delectus consectetur beatae harum vel similique! Facere aliquam cupiditate minima deleniti voluptas. Assumenda, delectus vel!</p>
        <a class="btnRounded" href="">Mission, Vision and Values</a>
        </div>

        <div class="core-value-grid">
            <div class="core-value-child flex-center">
                <h3>Honesty</h3>
                <p>The foundation for and respecting each other</p>
            </div>
            <div class="core-value-child">
                <h3>Care</h3>
                <p>The individual situation and well bring uhh</p>
            </div>
            <div class="core-value-child">
                <h3>Care</h3>
                <p>The individual situation and well bring uhh</p>
            </div>
            <div class="core-value-child">
                <h3>Care</h3>
                <p>The individual situation and well bring uhh</p>
            </div>
            <div class="core-value-child">
                <h3>Care</h3>
                <p>The individual situation and well bring uhh</p>
            </div>
            <div class="core-value-child">
                <h3>Care</h3>
                <p>The individual situation and well bring uhh</p>
            </div>
        </div>
    </div>
  </div>
</section>
        <section class="wrapper-frontpage">
            <h2>Our houses</h2>
            <div class="slideshow-container">
                <div class="swiper slideShow">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-fancybox="gallery">
                        <div class="slider-house">
                            <div class="slider-text-container">

                                <div class="slider-container">
                                <h3>Purkærhuset</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum velit, aut, non amet dolores modi unde ea voluptatibus minima atque aliquid praesentium adipisci esse. Itaque esse porro tempore iste pariatur.</p>
                                </div>

                                <a class="btnRounded" href="">See house</a>
                            </div>
                            <div class="slider-image-container">
                                <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
                            </div>

                        </div>
                        </div>
                        <div class="swiper-slide" data-fancybox="gallery">
                            <div class="slider-house">
                                <div class="slider-text-container">
                                 <div class="slider-container">
                                <h3>Purkærhuset</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum velit, aut, non amet dolores modi unde ea voluptatibus minima atque aliquid praesentium adipisci esse. Itaque esse porro tempore iste pariatur.</p>
                                </div>
                                    <a class="btnRounded" href="">See house</a>
                                </div>
                                <div class="slider-image-container">
                                    <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
                                </div>

                            </div>
                            </div>
                  </div>
                </div>

                <div class="swiper-pagination"></div>
                  </div>
            </section>

            <div class="wrapper-frontpage">
          <section class="target competencies">
      <div class="competencies-container flex-center">
        <h2>Competencies and Staff</h2>
</section>

{{-- <section class="flexContainerFp">
    <div class="flexChildFp">
        <h1>Bo-og Behandlingscenter Blokhus</h1>
        {!! get_field('frontpage_paragraph') !!}
        <a class="btnRounded" href="">See available spots</a>
    </div>

    <div class="flexChildFp">
        <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
    </div>
</section>

<section class="flex-container-entry wrapper-small-single-column">

    @php $card = get_field('entrypoint_card') @endphp
    @foreach ($card as $cards)
        <a href="{{ $cards['entrypoint_link'] }}" class="card">
            <img src="{{ $cards['entrypoint_image']['sizes']['large'] }}"
                @if ($cards['entrypoint_image']['alt']) alt="{{ $cards['entrypoint_image']['alt'] }}" @endif>
            <p>{{ $cards['entrypoint_text'] }}</p>
        </a>
    @endforeach

    <div class="about-fond-container">
       <h2>{{ get_field('about_fond_title')}} </h2>
       {!! get_field('about_fond_text') !!}
    </div>
</section>




BIG Flexible content LORE DONT ERASE ME UNTIL U MAKE FLEXIBLE CONTENT

 @php $flexibleContent = get_field('flextest') @endphp
@foreach ($flexibleContent as $fc)
@if ($fc['acf_fc_layout'] == '4_by_4_section_')
<h1>yooo</h1>
<p>{{ $fc['this_is_a_test'] }}</p>
<p>{{ $fc['anoher_test'] }}</p>
@endif
@if ($fc['acf_fc_layout'] == 'labelwhat')
<section>
<h1>IMAGES?</h1>
<p>{{ $fc['this_is_a_test'] }}</p>
<br>
<p>{{ $fc['anoher_test'] }}</p>
</section>
@endif
@endforeach




<section class="wrapper-small-single-column">

<div class="flex">

<div class="text-container-flex">
<h2>Core values</h2>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nihil cum alias architecto, ipsum earum delectus consectetur beatae harum vel similique! Facere aliquam cupiditate minima deleniti voluptas. Assumenda, delectus vel!</p>
</div>

<div class="core-value-grid">
    <div class="core-value-child">
        <h3>Honesty</h3>
        <p>The foundation for and respecting each other</p>
    </div>
    <div class="core-value-child">
        <h3>Care</h3>
        <p>The individual situation and well bring uhh</p>
    </div>
    <div class="core-value-child">
        <h3>Care</h3>
        <p>The individual situation and well bring uhh</p>
    </div>
    <div class="core-value-child">
        <h3>Care</h3>
        <p>The individual situation and well bring uhh</p>
    </div>
    <div class="core-value-child">
        <h3>Care</h3>
        <p>The individual situation and well bring uhh</p>
    </div>
    <div class="core-value-child">
        <h3>Care</h3>
        <p>The individual situation and well bring uhh</p>
    </div>
</div>
</div>
</section>

<section class="wrapper-large-single-column">
<div class="slideshow-container">
    <div class="swiper slideShow">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-fancybox="gallery">
            <div class="slider-house">
                <div class="slider-text-container">
                    <h1>I am the house name</h1>
                </div>
                <div class="slider-image-container">
                    <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
                </div>

            </div>
            </div>
            <div class="swiper-slide" data-fancybox="gallery">
                <div class="slider-house">
                    <div class="slider-text-container">
                        <h1>I am the house</h1>
                    </div>
                    <div class="slider-image-container">
                        <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
                    </div>

                </div>
                </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
      </div>
</section> --}}
