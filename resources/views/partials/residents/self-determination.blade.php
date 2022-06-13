<section id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2 class="margin-2-y">{{$fc['section_name']}}</h2>
  <div class="alternate">

    @foreach ($fc['repeatable_text_area'] as $rt)
        <div class="alternate-child">
          <div class="image-container">
            <img src="{{$rt['image']['sizes']['large']}}" class="living-conditions-img-2"alt="{{$rt['image']['alt']}}">
            <h4>quote</h4>
          </div>
          <div class="alternate-text">
            <h3 class="margin-2-y">{{$rt['text_field_title']}}</h3>
            {!! $rt['text_field'] !!}
            @if ($rt['optional_button_text'])
            <a href="{{$rt['optional_button_link']['url']}}" class="btnRounded" style="margin-top: 1.5rem;"> {{$rt['optional_button_text']}}</a>
            @endif
            </div>
          </div>
    @endforeach
    </div>

    </section>
