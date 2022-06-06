<footer class="content-info">
  <div class="footer-container wrapper-frontpage">
    <div class="footer-child">
      <h4>Contact information</h4>
      <ul>
        <li><i class="fab fa-twitter"></i> Gitte Simonsen</li>
        <li> <a href="mailto:{{get_field('company_email', 'options')}}"><i class="fab fa-twitter"></i> {{get_field('company_email', 'options')}}</li></a>
        <li> <a href="mailto:{{get_field('company_phone_number', 'options')}}"><i class="fab fa-twitter"></i> {{get_field('company_phone_number', 'options')}}</li></a>
       
        <li><i class="fab fa-twitter"></i> 26 35 55 94</li>
        <li><i class="fab fa-twitter"></i> Purkærvej 55 9490 Pandrup</li>
      </ul>
    </div>
    <div class="footer-child">
      <h4>Houses</h4>
      <ul>
        @php $house_list = Houses::House(-1) @endphp
        @foreach ($house_list as $house)
        we need to be black 
            <li><a href="{{$house['link']}}">{{$house['houseInformation']['house_name']}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="footer-child">
        <div class="image-container-footer">
          @php
              $imageFooter = get_field('footer_image', 'options')
          @endphp
          <a href="{{get_field('footer_url', 'options')}}"> <img src="{{$imageFooter['sizes']['medium']}}" alt=""></a>
        </div>
    </div>
  </div>
</footer>
