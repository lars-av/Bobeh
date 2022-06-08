<section id="{{str_replace(' ', '', $fc['section_name'])}}">
<h2>{{$fc ['section_name']}}</h2>
        <!-- Slider main container -->
        <div class="swiper aboutSlide" stlye="margin-top: 2rem">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($fc['goal-repeater'] as $gr)
            <div class="swiper-slide" data-swiper-autoplay="4000">
              <div class="goal">
                <div class="goal-info">
                  <h2>{{$gr['goal-repeater-title']}}</h2>
                  <p>
                    {{$gr['goal-repeater-paragraph']}}
                  </p>
                </div>
                <div class="goal-testimony">
                  <h4>{{$gr['goal-repeater-testimony']}}</h4>
                  @if ($gr['goal_repeater_author'])
                  <p>{{$gr['goal_repeater_author']}}</p>
                  @else
                  <p>Resident testimony</p>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

</section>

<script>






console.log(goals)
</script>
