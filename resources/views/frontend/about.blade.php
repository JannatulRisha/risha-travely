<section class="agency_section layout_padding-bottom" id="about">

  @php

  $aboutData = App\Models\About::find(1);

  @endphp
  
  <div class="agency_container" style="background-image: url('frontend/assets/images/sea.jpg')">
    <div class="box ">
      <div class="detail-box">
        <div class="heading_container">
          <h2>
            {{ $aboutData->title }}
          </h2>
        </div>
        <p>
          {{ $aboutData->short_text }}
        </p>
      </div>
    </div>
  </div>
</section>