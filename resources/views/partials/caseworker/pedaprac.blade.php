<section id="{{str_replace(' ', '', $fc['section_name'])}}">

<div class="image-half-width">
<h2>{{$fc['section_name']}}</h2>
<div class="ourprocess-wrap">
<img src="{{$fc['image']['sizes']['large']}}" class="house-activities-img"alt="{{$fc['image']['alt']}}">

  <div class="text-field-1col">
    {!!$fc['text']!!}
    <a class="btnRounded" id="caseworker-btn-2">Competencies and staff</a>
  </div>
</div>
  <div class="pedaprac-methods">
    @foreach ($fc['repeatable_textfield'] as $tf)
        <div class="divspecific-paragraph">
          <h3>{{$tf['textfield_title']}}</h3>
          {!! $tf['textfield_paragraph'] !!}
        </div>
    @endforeach
</div>
</div>
</section>
