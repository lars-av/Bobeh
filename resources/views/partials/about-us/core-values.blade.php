<section id="{{str_replace(' ', '', $fc['section_name'])}}">
  @dump($flexibleContent)
  <div style="margin-bottom: 2rem;">
    <h2>{{$fc['section_name']}}</h2>
    {!!$fc['core_values_paragrapgh']!!}
  </div>
  <div class="values-layout">
    @foreach($fc['core_values_repeater'] as $fcr)
    <div class="value">
      <h3>{{$fcr['value_title']}}</h3>
      <p>{{$fcr['value_paragraph']}}</p>
    </div>
    @endforeach
  </div>

</section>
