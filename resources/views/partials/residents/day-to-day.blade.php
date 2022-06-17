<section>

@if ($fc['list_section_title'])

<div class="infographics">
  <h3>{{$fc['list_section_title']}} </h3>
  <div class="infographics-grid">

    @if ($fc['repeatable_list'])
    @foreach ($fc['repeatable_list'] as $rl)
    <div class="infographic-column">
      <h4>
        <i class="fa-solid fa-person icon"></i>
        {{$rl['list_titel']}}
      </h4>
      {!! $rl['list'] !!}
    </div>
    @endforeach
    @endif
  </div>
</div>
@endif

</section>
