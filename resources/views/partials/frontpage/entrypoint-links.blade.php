<section class="wrapper-frontpage">
    <div class="flex-container-entry">
    <div class="focused-entry-points">
        @foreach ($fc['button_repeater'] as $link)
            <a href="{{ $link['button_link'] }}" class="card">
                <img src="{{ $link['button_image']['sizes']['large'] }}"
                    @if ($link['button_image']['alt']) alt="{{ $link['button_image']['alt'] }}" @endif>
                  <div class="entry-point-card-text">
                    <p>{{ $link['button_text'] }}</p>
                  </div>
            </a>
        @endforeach
    </div>
        <div class="about-fond-container">
           {!! $fc['paragraph'] !!}
        </div>
    </div>
    </section>