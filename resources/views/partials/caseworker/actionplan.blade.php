<section class="action-plan" id="{{str_replace(' ', '', $fc['section_name'])}}">
<div class="image-half-width">
<h2>{{$fc['section_name']}}</h2>
<div class="ourprocess-wrap">
<img src="{{$fc['image']['sizes']['large']}}" class="house-activities-img"alt="{{$fc['image']['alt']}}">

<div class="text-field-1col">
  {!!$fc['text']!!}
  </div>
</div>
<div class="infographics action-grid">
    <div class="infographics-grid">
      @foreach ($fc['repeatable_textfield_type_1_'] as $tf)
      <div class="infographic-column">
        {!!$tf['icon']!!}
        <h4 class="h4-caseworker"> {{$tf['textfield_title']}} </h4>
        <p class="action-plan-grid-p"> {{$tf['textfield_paragraph']}}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>

@foreach ($fc['repeatable_textfield_type_2'] as $tf)
    <div class="half-section-paragraph">
      <h3>{{$tf['textfield_title']}}</h3>
      {!! $tf['textfield_paragraph'] !!}
    </div>
@endforeach
</section>
