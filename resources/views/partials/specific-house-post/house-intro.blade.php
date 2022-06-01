

<section>
    <div class="image-full-width">
        <h2>{{$fc['house_name']}}</h2>
        <div class="two-sections-wrap">
            <div class="address-section">
                <p><b>Address:</b> {{$fc['address']}}</p>

                @foreach ($fc['house_features'] as $hf)
                <h6><i class="fa-solid fa-house-chimney-medical"></i>{{$hf['house_features_descriptions']}}</h6>
                @endforeach
            </div>
            <div class="spots-section">
                <ul>
                    <p><b>Spots</b></p>
                    {!! $fc['types_of_spots'] !!}
                </ul>
            </div>
        </div>
    </div>
</section>
