<section id="cards">

  <div class="cards-section">
      @php $house_list = Houses::House(-1) @endphp
      @foreach ($house_list as $house)
      <div class="department-card">
      <img src={{$house['featured-image']}} alt="people-smiling">
      <div class="department-card-info">
        <h3>{{$house['houseInformation']['house_name']}}</h3>
        @if ($house['houseInformation']['available_spots'] < 1)
          <p>No available spots</p>
        @else
        <p>Available spots: {{$house['houseInformation']['available_spots']}}</p>
        @endif

      </div>
      <div class="department-card-hovered">
        <h2>{{$house['houseInformation']['house_name']}}</h2>
        @if ($house['houseInformation']['available_spots'] < 1)
        <p>No available spots</p>
        @else
        <p>Available spots: {{$house['houseInformation']['available_spots']}}</p>
        @endif
        <p>
        {{$house['houseInformation']['house_description']}}
        </p>
        <button class="btn-card"><a href="{{$house['link']}}">View house</a> </button>
      </div>
    </div>
    @endforeach
  </div>
</section>


