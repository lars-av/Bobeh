<!doctype html>
@php
$loader = get_field('loader-icon', 'options')
@endphp

<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body style="overflow-x: hidden" @php body_class() @endphp>
      @php do_action('get_header') @endphp
    @include('partials.header')
    <div data-barba="wrapper" class="wrap container" role="document">
      <div class="content">
        <main class="main">
          <div class="loader">
            <img src={{$loader['url']}} alt="">
          </div>
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>


