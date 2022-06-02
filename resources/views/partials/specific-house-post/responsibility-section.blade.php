<section id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2>{{$fc['section_name']}}</h2>
  <p>
  {!! $fc['section_description'] !!}
  </p>
  <div class="help-boxes">

    @foreach ($fc['list_of_skills'] as $dc)
    <div class="box-1">
      <h3>{{$dc['section_titel']}}</h3>
      {!! $dc['section_list'] !!}
    </div>
    @endforeach
  </div>
</section>