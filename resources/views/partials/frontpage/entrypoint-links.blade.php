<section class="wrapper-frontpage">
    <div class="flex-container-entry">
    <div class="focused-entry-points">
        @php $card = get_field('entrypoint_card') @endphp
        @foreach ($card as $cards)
            <a href="{{ $cards['entrypoint_link'] }}" class="card">
                <img src="{{ $cards['entrypoint_image']['sizes']['large'] }}"
                    @if ($cards['entrypoint_image']['alt']) alt="{{ $cards['entrypoint_image']['alt'] }}" @endif>
                  <div class="entry-point-card-text">
                    <p>{{ $cards['entrypoint_text'] }}</p>
                  </div>
            </a>
        @endforeach
    </div>
        <div class="about-fond-container">
           <h2>{{ get_field('about_fond_title')}} </h2>
           {!! get_field('about_fond_text') !!}
        </div>
    </div>
    </section>