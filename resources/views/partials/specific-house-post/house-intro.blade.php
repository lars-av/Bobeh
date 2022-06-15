
@php $house = get_field('house_introduction')@endphp

<section>
    <div class="image-full-width">
        <h2>{{$house['house_name']}}</h2>
        <div class="two-sections-wrap">
            <div class="address-section">
                <p><b>Address:</b> {{$house['house_address']}}</p>

                @if ($house['feature'])
                @foreach ($house['feature'] as $hf)
                <h6><i class="fa-solid fa-house-chimney-medical"></i>{{$hf['individual_feature']}}</h6>
                @endforeach
                @endif
      
            </div>
            <div class="spots-section">
                <ul>
                    @if ($house['available_spots'] > 0)
                    available spots {{$house['available_spots']}}
                    @else 
                    No available spots currently
                    @endif
                    
                
                    <p><b>Spots</b></p>
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
