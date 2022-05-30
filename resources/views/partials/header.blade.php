{{-- <header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> 
    <a href="">LOGO MAN</a>
    <div class="navbar-icon">
      <span>Im button</span>
    </div>
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
     
</header>
 --}}
{{-- 
 https://codepen.io/KemPavel/pen/VKyRYV --}}

<header @if (is_front_page())front-page @endif class="page-header header">
  <div class="page-header__top">
    <div class='page-header__logo'>LOGO</div>
    <div class="page-header__toggle" onclick="toggleMenu()">☰</div>
  </div>
  <nav class="page-header__bottom">
    <ul id="navigation" class="navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </ul>
  </nav>
</header>

<script>

let nav = document.getElementById('navigation');
function toggleMenu() {
nav.classList.toggle('navigation--visible');
}
</script>