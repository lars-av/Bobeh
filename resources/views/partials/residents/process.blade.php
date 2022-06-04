<section id="{{str_replace(' ', '', $fc['section_name'])}}">
  <h2>{{$fc['section_name']}}</h2>
  
  <p class="text-field">{!!$fc['section_description'] !!}</p>
  <div class="infographics" id="process-banner">
    <div class="infographics-grid" id="process">

      @foreach ($fc['repeater_text_field_and_icon'] as $rf)
      <div class="infographic-process">
        <i class="{{$rf['icon']}} icon-process"></i>
        <p>{{$rf['icon']}}</p>
        <i class="fa-solid fa-person"></i>
        <h5>
          {{$rf['title']}}
        </h5>
        <p>{{$rf['paragraph']}}</p>
      </div>
      @endforeach
    </div>
    @if ($fc['additional_info'])
    <p class="text-field" style="margin-bottom: 0.5rem;">{{$fc['additional_info']}}</p>
    @endif
    
    @if ($fc['button_text'])
    <a href="{{$fc['button_link']}}" class="btnRounded">{{$fc['button_text']}}</a> 
    @endif

</section>
