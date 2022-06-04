<section id="{{str_replace(' ', '', $fc['section_name'])}}"">
  <div class="image-full-width">
    <h2>{{$fc['section_name']}}</h2>
    <img src="{{$fc['image']['sizes']['large']}}" class="living-conditions-img-2"alt="{{$fc['image']['alt']}}">
    <div class="image-text">
      <div class="text-field">
      {!! $fc['paragraph'] !!}
    </div>
</div>
<div>
</div>
  </div>
  <div class="involvement-steps">
    @foreach ($fc['repeatable_list'] as $rl)
    <div class="involvement-step-child">
      <div class="involvement-card">
      <div>
        <h3>{{$rl['text_field_title']}}</h3>
         {!! $rl['text_field'] !!}
        </div>
          <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="people-smiling">
      </div>
    </div>
    @endforeach
  </div>
</section>
