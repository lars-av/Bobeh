<section id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2>{{$fc['section_name']}}</h2>
  <div class="activity-one">
    <div class="activity-text">
      {!! $fc['first_text'] !!}
    </div>
    <img src="{{$fc['first_image']['sizes']['large']}}" class="house-activities-img"alt="{{$fc['first_image']['alt']}}">
  </div>

  <div class="activity-two">
    <div class="activity-text">
      {!! $fc['second_text'] !!}
    </div>
    <img src="{{$fc['second_image']['sizes']['large']}}" class="house-activities-img"alt="{{$fc['second_image']['alt']}}">
  </div>
</section>