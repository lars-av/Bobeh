@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">
      <div class="side-nav">
        <ul>
           <a href="#social-life"><li class="anchor" >Social Life</li></a>
           <a href="#day-to-day"><li class="anchor" >Day to Day Life</li></a>
           <a href="#process-of-applying"><li class="anchor" >Process of applying</li></a>
           <a href="#self-determination"><li class="anchor" >Self Determiation</li></a>
        </ul>
      </div>
    </div>
    @endif

    {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/residents.hero-text')
      @include('partials/residents.social-life')
      @include('partials/residents.day-to-day')
      @include('partials/residents.process')
      @include('partials/residents.self-determination')

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




