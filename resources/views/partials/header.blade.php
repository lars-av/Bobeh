<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>

  {{-- @php $house_list = Departments::House(-1) @endphp
    @foreach ($house_list as $house)
    {{ $house['title'] }}
    {{ $house['link'] }}
    @dump($house['link'] )
    @endforeach
     --}}
</header>
