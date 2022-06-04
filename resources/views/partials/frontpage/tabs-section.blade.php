<section class="blue-section">
    <div class="wrapper-frontpage">
    <div class="target-group ">
        <div class="target-flower">
          {{-- <svg height="300" width="500"class="target-flower">
            <path fill="#35AB99" fill-opacity=".47" d="M108.524 272.917c.087-.428.167-.862.254-1.29.098.032.197.071.296.104a96.55 96.55 0 0 1-.581 1.16l.031.026Z"/>
          </svg> --}}
          <object data="/wp-content/themes/Bobeh/resources/assets/images/targetflower.svg" type="image/svg+xml" class="flower-path"></object>
        </div>
      <!-- Target group text -->
      <div class="target-group-description ">
      <h2>Our target group</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit eos repudiandae a accusantium ullam aperiam assumenda? Dignissimos laudantium quaerat dolor! Fugiat unde architecto quia tenetur sapiente molestiae delectus debitis modi.</p>
      </div>
  
  
  <!--Tabs v2-->
  
      <div class="tabs-container">
  
          @php
              $h = 1 @endphp
             @php $p = 1 @endphp
             @php $targetgroups = get_field('target_group_list')
           @endphp
          <ul class="tabs">
              @foreach ($targetgroups as $tgs)
              <li class="tab-link" data-tab="tab-{{$h}}">{{ $tgs['target_group_list_title'] }}</li>
              @php $h++ @endphp
              @endforeach
          </ul>
          @foreach ($targetgroups as $bgs)
          <div id="tab-{{$p}}" class="tab-content current{{$p}}">
              {!!$bgs['list_of_items'] !!}
          </div>
          @php $p++ @endphp
          @endforeach
  </div>
  </div>
  </div>
  </section>