@php
    $contactperson = get_field('contact_person', 'option')
@endphp

<section>
  <h1 id="contact-us">Contact us</h1>
  <p>
    If you want to know mere about the foundation and our housing offers, then feel free to contact us.
    <br><br>
    If you need to send CPR sensitive documentation, please do this by using either our mail: <b>sikkermail@bobeh-blokhus.dk</b> or by sending directly through our CVR. number: <b>32409946</b>
  </p>
  <div class="contact-staff">
    @foreach ($contactperson as $cp)
    <div class="person">
      <p>{{$cp['contact_person_name']}}</p>
      <p>{{$cp['contact_person_title']}}</p>
      <a href="telto:{{$cp['contact_person_phone_number']}}"><i class="fa-solid fa-phone" style="margin: 0 0.5rem 0 0;"></i>{{$cp['contact_person_phone_number']}} </a>
     <a href="mailto:{{$cp['contact_person_email']}}"><i class="fa-solid fa-envelope" style="margin: 0 0.5rem 0 0;"></i>{{$cp['contact_person_email']}} </a>
    </div>
    @endforeach
    
  </div>

  <div class="contact-house" id="find-us">
    <iframe src="https://www.google.com/maps/d/embed?mid=1iGfEje0aDKK0GjqBlcIesm1dl_wbYwA&hl=da&ehbc=2E312F" width="640" height="480"></iframe>
    <div class="all-houses">
      <div class="house">
        <h4>Skovkærhus</h4>
        <h6>Purkærvej 55</h6>
        <h6>9490 Pandrup, Nordjylland</h6>
        <h6><i class="fa-solid fa-phone" style="margin: 0 0.5rem 0 0;"></i>24 52 57 12</h6>
      </div>

      <div class="house">
        <h4>Skovkærhus</h4>
        <h6>Purkærvej 55</h6>
        <h6>9490 Pandrup, Nordjylland</h6>
        <h6><i class="fa-solid fa-phone" style="margin: 0 0.5rem 0 0;"></i>24 52 57 12</h6>
      </div>

      <div class="house">
        <h4>Skovkærhus</h4>
        <h6>Purkærvej 55</h6>
        <h6>9490 Pandrup, Nordjylland</h6>
        <h6><i class="fa-solid fa-phone" style="margin: 0 0.5rem 0 0;"></i>24 52 57 12</h6>
      </div>
    </div>
  </div>
</section>