
<section class="no-margin">
    <div class="flex-frontpage">
    <div class=" front-title flex-center text-container-frontpage">
      <div>
        <h1 style="">{{$fc['main_heading']}}</h1>
        {!! $fc['paragraph'] !!}
        <a class="btnRounded" style="margin-top: 1rem;" href="{{$fc['button_link']}}">{{$fc['button_text']}}</a>
      </div>
    </div>

    <div class="flex-container-frontpage image-frontpage">
        <img src={{$fc['image__image_slider']['sizes']['large']}} alt="">
    </div>
</div>
</section>
