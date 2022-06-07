<section id="reach-out" @if (is_front_page())class="wrapper-frontpage" @endif>
  <div class="wrapper">
    <h2 style="">Reach out to us</h2>
    <div class="reachout-section">
    <div class="reachout-text">
      {!! get_field('contact_us_block', 'options') !!}
      <a href="tel:{{get_field('company_phone_number', 'options')}}"><i class="fa-solid fa-phone" style="margin: 0 0.5rem 0 0;"></i> {{get_field('company_phone_number', 'options')}}</a>
      <a href="mailto:{{get_field('company_phone_number', 'options')}}"><i class="fa-solid fa-envelope" style="margin: 0 0.5rem 0 0;"></i>gitte@bobeh-blokhus.dk</a>
    </div>
      <div class="reachout-button">
      <a class="btnRounded" id="caseworker-btn-3">Contact us</a>
      </div>
    </div>
    </div>
  </div>
  </div>
</section>
