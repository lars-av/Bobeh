
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
