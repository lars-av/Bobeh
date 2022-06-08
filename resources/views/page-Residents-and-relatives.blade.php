@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

@php
    $flexibleContent = get_field('flexiblecontent')
@endphp


{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">
      <div class="side-nav">
        <ul>
          @foreach ($flexibleContent as $sh)
          @if ($sh['section_name'])
            <a href="#{{str_replace(' ', '', $sh['section_name'])}}"><li class="anchor" >{{$sh['section_name']}}</li></a>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
  @endif

    {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>


@include('partials/residents.hero-text')

@foreach ($flexibleContent as $fc)
@if ($fc['acf_fc_layout'] == 'section:_image_text_button_list')
@include('partials/residents/social-life')
@endif
@if ($fc['acf_fc_layout'] == 'section:_green_section_with_white_text')
@include('partials/residents.process')
@endif
@if ($fc['acf_fc_layout'] == 'section:_image_and_text')
@include('partials/residents.self-determination')
@endif
@if ($fc['acf_fc_layout'] == 'section:_side_by_side_image_and_text_list_')
@include('partials/residents.duty-of-care')
@endif
@if ($fc['acf_fc_layout'] == 'section:_image_text_and_repeatable_horizontal_list')
@include('partials/residents.involvement-in-development')
@endif
@endforeach
    </div>
  </div>
@endsection

<script>
// const link = document.querySelectorAll(".anchor")
console.log(window.onload)

link.addEventListener("click", (e) => {
 e.target.classList.add('active')
})

</script>




