<section id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2>{{$fc['section_name']}}</h2>
  <div class="duty-of-care">
    <div class="image">
      <p class="line-height">
        {!! $fc['short_description'] !!}
      </p>
      <img src="{{$fc['image']['sizes']['large']}}" class="living-conditions-img-2"alt="{{$fc['image']['alt']}}">
    </div>
    <div class="info">
     {!! $fc['list'] !!}
     @if ($fc['optional_button_text'])
     <div style="display: block;">
      <a href="{{$fc['optional_button_link']}}" class="btnRounded">{{$fc['optional_button_text']}}</a>
    </div>
     @endif

    </div>
  </div>
</section>
