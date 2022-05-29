<section>
    <div class="flex-frontpage">
    <div class="flex-container-frontpage flex-center text-container-frontpage">
        <h1>Bo-og Behandlingscenter Blokhus</h1>
        {!! get_field('frontpage_paragraph') !!}
        <a class="btnRounded" href="">See available spots</a>
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
            <p>{{ $cards['entrypoint_text'] }}</p>
        </a>
    @endforeach
</div>
    <div class="about-fond-container">
       <h2>{{ get_field('about_fond_title')}} </h2>
       {!! get_field('about_fond_text') !!}
    </div>
</div>
</section>

<section class="news wrapper-frontpage">
    <h2>News</h2>
    <div class="banner">
        <p>We have new job listings posted</p>     
        <a href="">Read more</a>
    </div>

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

<section class="blue-section">

    <div class="target-group wrapper-frontpage">
    <!-- Target group text -->
    <div class="target-group-description flex-center">
    <h2>Our target group HC</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit eos repudiandae a accusantium ullam aperiam assumenda? Dignissimos laudantium quaerat dolor! Fugiat unde architecto quia tenetur sapiente molestiae delectus debitis modi.</p>
    </div>


<!--Tabs v2-->

    <div class="tabs-container">

        <ul class="tabs">
            @php $i = 1 @endphp
            @php $x = 1 @endphp
            @php $targetgroup = get_field('target_group_list') @endphp
    
            @foreach ($targetgroup as $tg)
            <li class="tab-link current" data-tab="tab-{{i}}">{{ $tg['target_group_list_title'] }}</li>
            <button class="tab active{{$i}} tab-button" data-toggle-target=".tab-content-{{$i}}"> {{ $tg['target_group_list_title'] }}</button>
            @php $i++ @endphp
            @endforeach

            <li class="tab-link" data-tab="tab-3">Tab Three</li>
            <li class="tab-link" data-tab="tab-4">Tab Four</li>
        </ul>
    
        <div id="tab-1" class="tab-content current">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div id="tab-2" class="tab-content">
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div id="tab-3" class="tab-content">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        <div id="tab-4" class="tab-content">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>

    <!-- Tabs -->
    <div class="target-group-tabs">
    <div class="button-container">
    @foreach ($targetgroup as $tg)
    <button class="tab active{{$i}} tab-button" data-toggle-target=".tab-content-{{$i}}"> {{ $tg['target_group_list_title'] }}</button>
    @php $i++ @endphp
    @endforeach
        </div>
    <!-- Content -->
    @foreach ($targetgroup as $bg)
    <div class='tab-content tab-content-{{$x}} tab-information active{{$x}}'>
        {!!$bg['list_of_items'] !!}
    </div>
    @php $x++ @endphp
    @endforeach
</div>
</div>
</section>

<section class="blue-section">
    <div class="wrapper-frontpage core-values">
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

<section class="target-group competencies wrapper-frontpage">

    <div class="competencies-container flex-center">
        <h2>Competencies and Staff</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quidem dolorem illo ullam, magni libero saepe odit! Cum sint, rem, veniam nihil deserunt doloribus praesentium error enim minus, quas deleniti.</p>
    </div>
    <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
 

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



{{--
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