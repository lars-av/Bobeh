
<section class="image-full-width" id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2>{{$fc['section_name']}}</h2>
  <div class="image-text">
    <div class="text-field-1">
      {!! $fc['first_text'] !!}
    </div>
  </div>
  <img src="{{$fc['image']['sizes']['large']}}" class="abouthouse-img" alt="{{$fc['image']['alt']}}">
<div class="about-section-2">
  <div class="text-field-1">
    {!! $fc['second_text'] !!}
</div>
</div>
</section>