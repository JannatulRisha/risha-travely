<section class="service_section layout_padding" id="services">
  <div class="container">

    @php

    $serviceData = App\Models\Service::find(1);

    @endphp
    <div class="heading_container">
      <h2>
        {{ $serviceData->title }}
      </h2>
      <p>
        {{ $serviceData->short_text }}
      </p>
    </div>
    <div class="row">
      <div class="col-lg-6 ">
        <div class="img-container tab-content">
          <div class="img-box tab-pane fade show active" id="img1" role="tabpanel">
            <img
              src="{{ (!empty($serviceData->service_photo)) ? url($serviceData->service_photo): url('/upload/no_image.jpg') }}"
              alt="" />
          </div>

        </div>
      </div>


      <div class="col-lg-6">
        <div class="detail-container nav nav-tabs" id="myTab" role="tablist">
          <div class="detail-box active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-selected="true">
            <h4>
              {{ $serviceData->text_one }}
            </h4>
          </div>
          <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-selected="false">
            <h4>
              {{ $serviceData->text_two }}
            </h4>
          </div>
          <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img3" role="tab" aria-selected="false">
            <h4>
              {{ $serviceData->text_three }}
            </h4>
          </div>
          <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
            <h4>
              {{ $serviceData->text_four }}
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>