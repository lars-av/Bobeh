
@php $house = get_field('house_introduction')@endphp

<section>
    <div class="image-full-width">
        <h2>{{$house['house_name']}}</h2>
        <div class="two-sections-wrap">
            <div class="address-section">
                <p><b>Address:</b> {{$house['house_address']}}</p>

                @if ($house['feature'])
                @foreach ($house['feature'] as $hf)
                <div class="icon-layout" style ="display: flex;">
                  {!!$hf['icon']!!}
                  <h6>
                    {{$hf['individual_feature']}}
                  </h6>
                </div>
                @endforeach
                @endif

            </div>
            <div class="spots-section">
              <h3>Spots</h3>
                <ul>
                    @if ($house['available_spots'] > 0)
                    available spots {{$house['available_spots']}}
                    @else
                    No available spots currently
                    @endif
                    <ul>
                        @foreach ($house['types_of_spots'] as $spot)
                          <li><b>§{{$spot['paragraph_number']}}</b> {{$spot['paragraph_description']}} </li>
                        @endforeach
                        <li></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</section>
