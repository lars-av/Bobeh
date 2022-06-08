@php
$targetFlower = get_field('target_flower', 'options')
@endphp

<section class="blue-section">
    <div class="wrapper-frontpage">
    <div class="target-group ">
        <div class="target-flower">
          {{-- <svg height="300" width="500"class="target-flower">
            <path fill="#35AB99" fill-opacity=".47" d="M108.524 272.917c.087-.428.167-.862.254-1.29.098.032.197.071.296.104a96.55 96.55 0 0 1-.581 1.16l.031.026Z"/>
          </svg> --}}
          {{-- <object data={{$targetFlower['url']}} type="image/svg+xml" class="flower-path"></object> --}}
          <img src="{{$targetFlower['url']}}" alt="">
        </div>
      <!-- Target group text -->
      <div class="target-group-description ">
        <h2>{{$fc['paragraph_title']}}</h2>
        {!! $fc['paragraph'] !!}
      </div>

  <!--Tabs v2-->
      <div class="tabs-container">
          @php $h = 1 @endphp
          @php $p = 1 @endphp
          @php $tabs = $fc['button_repeater'] @endphp
          <ul class="tabs">
              @foreach ($tabs as $tab)
              <li class="tab-link current{{$h}}" data-tab="tab-{{$h}}">{{ $tab['tab_title'] }}</li>
              @php $h++ @endphp
              @endforeach
          </ul>
          @foreach ($tabs as $tab)
          <div id="tab-{{$p}}" class="tab-content current{{$p}}">
              {!!$tab['tab_contents'] !!}
          </div>
          @php $p++ @endphp
          @endforeach
  </div>
  </div>
  </div>
  </section>
