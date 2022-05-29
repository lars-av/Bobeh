@extends('layouts.app')
@section('content')
<input type="checkbox" id="checkBox" name="ticked" onClick= >

{{-- Side navigation --}}
  <div class="wrapper-large">
    @if ("true" == "true")
    <div class="wrap-side-nav">Div1</div>
    @endif

    {{-- Content --}}
    <div  @if("true" == "true") class="wrap-side-content" @else class="wrap-only-content" @endif>
      @include('partials/houses.house-intro')
      @include('partials/houses.about-house')
      @include('partials/houses.activities')
      @include('partials/houses.responsibility-section')
      @include('partials/houses.living-conditions')
    </div>
  </div>
@endsection

<script>


</script>