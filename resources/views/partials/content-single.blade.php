
{{--Page for single posts--}}
<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
    <h3>Single posts found in partials content-single</h3>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
</article>
