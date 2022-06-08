<section id="staff">
<h2>{{$fc ['section_name']}}</h2>
<div class="management">
<h3>{{$fc ['sub-section-title']}}</h3>
<p class="intro-paragraph">
  {!!$fc['sub-section_paragraph']!!}
</p>
<div class="management-photos">
@foreach($fc['repeatable_cards'] as $rc)
<div class="photo">
  <img src={{$rc['card_picture']['sizes']['medium']}} alt={{$rc['card_picture']['alt']}}>
  <div>
    <h4>{{$rc['card_name']}}</h4>
    <p>{{$rc['card_paragraph']}}</p>
  </div>
</div>
@endforeach
</div>
</div>
<div class="approach">
  <h2>{{$fc['sub-section_title_2']}}</h2>
  <div class="approach-text">
    <div class="text">
    {!!$fc['sub-section_paragraph_2']!!}
  </div>
  <div class="image">
    <img src={{$fc['sub-section_image_2']['sizes']['medium']}} alt={{$fc['sub-section_image_2']['alt']}}>

      <div class="citation">
        <h4>{{$fc['sub-section_quote']}}</h4>
        <p>Principal Gitte Simonsen</p>
      </div>

  </div>
</div>
</div>

<div class="occupation">
  <h2 style="margin: 1rem 0; padding: 1rem;">Occupations at our houses</h2>
  <div class="occupation-banner">
    <div>
      <i class="fa-solid fa-user icon"></i>
      <h4>Teacher</h4>
    </div>
    <div>
      <i class="fa-solid fa-user icon"></i>
      <h4>Teacher</h4>
    </div>
    <div>
      <i class="fa-solid fa-user icon"></i>
      <h4>Teacher</h4>
    </div>
    <div>
      <i class="fa-solid fa-user icon"></i>
      <h4>Teacher</h4>
    </div>
  </div>
</div>
</section>
