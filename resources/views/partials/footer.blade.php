<footer class="content-info">
  <div class="footer-container wrapper-frontpage">
    <div class="footer-child">
      <h4>Contact information</h4>
      <ul>
        <li>
          {!!get_field('primary_contact_person_icon', 'options')!!}
          {{get_field('primary_contact_person', 'options')}}</li>
        <li>
          <a href="mailto:{{get_field('company_email', 'options')}}">
            {!!get_field('company_address_icon', 'options')!!}
            {{get_field('company_address', 'options')}}
          </a>
        </li>
        <li>
          <a href="mailto:{{get_field('company_phone_number', 'options')}}">
            {!!get_field('company_phone_number_icon', 'options')!!}
            {{get_field('company_phone_number', 'options')}}
          </a>
            </li>
      </ul>
    </div>
    <div class="footer-child">
      <h4>Houses</h4>
      <ul>
        @php $house_list = Houses::House(-1) @endphp
        @foreach ($house_list as $house)
            <li><a href="{{$house['link']}}">{{$house['houseInformation']['house_name']}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="footer-child portal">
        <div class="image-container-footer">
         <h4> Tilbudsportal</h4>
          @php
              $imageFooter = get_field('footer_image', 'options')
          @endphp
          <a href="{{get_field('footer_url', 'options')}}"> <img src="{{$imageFooter['sizes']['medium']}}" alt=""></a>
        </div>
    </div>
  </div>
</footer>
