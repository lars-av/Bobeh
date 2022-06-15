<section class="image-full-width residents" id="{{str_replace(' ', '', $fc['section_name'])}}">
<h2>{{$fc['section_name']}}</h2>
<img src="{{$fc['image']['sizes']['large']}}" class="living-conditions-img-2"alt="{{$fc['image']['alt']}}">

<div class="image-text">
  <div class="text-field">
{!! $fc['text'] !!}
  </div>
</div>
<div>
  @if ($fc['button_text'])
  <a href="{{$fc['button_link']['url']}}" class="btnRounded">{{$fc['button_text']}} </a>
  @endif
</div>

@if ($fc['list_section_title'])

<div class="infographics">
  <h3>{{$fc['list_section_title']}} </h3>
  <div class="infographics-grid">

    @foreach ($fc['repeatable_list'] as $rl)
    <div class="infographic-column">
      <div class="infographic-icon-white">
        {!!$rl['icon']!!}
        <h4>
          {{$rl['list_titel']}}
        </h4>
      </div>
      {!! $rl['list'] !!}
    </div>
    @endforeach
  </div>
</div>
@endif


</section>
