<section class="image-full-width" id="{{str_replace(' ', '', $fc['section_name'])}}">

<h2>{{$fc['section_name']}}</h2>
<img src="{{$fc['image']['sizes']['large']}}" class="house-activities-img"alt="{{$fc['image']['alt']}}">
 
<div class="image-text">
  <div class="text-field">
   {!! $fc['text'] !!}
  </div>
</div>
<div>
<div class="infographics-case">
    <h3>{{$fc['list_section_name']}} </h3>
    <div class="infographics-grid">
      @foreach ($fc['repeatable_lists'] as $li)
      <div class="infographic-column">
        {!! $li['list'] !!}
      </div>
      @endforeach
    </div>
</div>

  <a class="btnRounded" id="caseworker-btn" href="{{$fc['button_link']}}">{{$fc['button']}}</a>
</div>
</section>
