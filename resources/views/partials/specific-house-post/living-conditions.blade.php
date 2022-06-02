<section class="living-conditions" id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2>{{$fc['section_name']}}</h2>
  <img src="{{$fc['image_1']['sizes']['large']}}" class="abouthouse-img" alt="{{$fc['image_1']['alt']}}">
  <div class="paragraph-1">
    {!! $fc['text_1'] !!}
  </div>

  <div class="living-condition-section-2">
    <img src="{{$fc['image_2']['sizes']['large']}}" class="living-conditions-img-2"alt="{{$fc['image_2']['alt']}}">
    <img src="{{$fc['image_3']['sizes']['large']}}" class="living-conditions-img-2"alt="{{$fc['image_3']['alt']}}">
  </div>
  <div class="paragraph-2">
    {!! $fc['text_2'] !!}
    </div>


</section>