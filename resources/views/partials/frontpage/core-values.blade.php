@php
$valueFlower = get_field('value_flower', 'options')
@endphp

<section class="blue-section">
    <div class="wrapper-frontpage">
      <div class=" core-values">
        <div class="values-flower">
          <img src={{$valueFlower['url']}} alt="">
          {{-- <object data="/wp-content/themes/Bobeh/resources/assets/images/flowervalues.svg" type="image/svg+xml" class="flower-path-values"></object> --}}
        </div>
          <div class="core-values-description flex-center">
          <h2>Core values</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nihil cum alias architecto, ipsum earum delectus consectetur beatae harum vel similique! Facere aliquam cupiditate minima deleniti voluptas. Assumenda, delectus vel!</p>
          <a class="btnRounded" href="">Mission, Vision and Values</a>
          </div>

          <div class="core-value-grid">
              <div class="core-value-child flex-center">
                  <h3>Honesty</h3>
                  <p>The foundation for and respecting each other</p>
              </div>
              <div class="core-value-child">
                  <h3>Care</h3>
                  <p>The individual situation and well bring uhh</p>
              </div>
              <div class="core-value-child">
                  <h3>Care</h3>
                  <p>The individual situation and well bring uhh</p>
              </div>
              <div class="core-value-child">
                  <h3>Care</h3>
                  <p>The individual situation and well bring uhh</p>
              </div>
              <div class="core-value-child">
                  <h3>Care</h3>
                  <p>The individual situation and well bring uhh</p>
              </div>
              <div class="core-value-child">
                  <h3>Care</h3>
                  <p>The individual situation and well bring uhh</p>
              </div>
          </div>
      </div>
    </div>
  </section>
