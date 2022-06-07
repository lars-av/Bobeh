<section class="news wrapper-frontpage">
    <div class="banner-news">
      <p>We have new job listings posted</p>
      <a href="">Read more</a>
    </div>



<h2>News</h2>
    <div class="news-card-container">

    @php $news = New_event::News(3) @endphp
    @foreach ($news as $singleNews)

    <div class="news-card">
        <img src="http://bobehandling.test/wp-content/uploads/2022/05/Purkaervej-scaled.jpg" alt="">
        <div class="news-card-text">
            <h4>{{$singleNews['title']}}</h4>
            {!! substr($singleNews['flex'], 0, 100) !!}...
        </div>
    </div>
    @endforeach
    </div>
</section>
