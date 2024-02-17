@extends('frontend.main_master')

@section('main')

<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">

        </li>

      </ol>

      @php
      $homeslide = App\Models\HomeSlide::find(1);
      @endphp
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 px-0">
                <div class="img-box">
                  <img
                    src="{{ (!empty($homeslide->slider_photo)) ? url($homeslide->slider_photo): url('/upload/no_image.jpg') }}"
                    alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>{{ $homeslide->title }}</h1>
                  <p>
                    {{ $homeslide->short_text }}
                  </p>
                  <a href="#contact">
                    {{ $homeslide->btn_text }}
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- end slider section -->
</div>
<!-- end hero area -->

<!-- service section -->

@include('frontend.services')

<!-- end service section -->

<!-- portfolio section -->

@include('frontend.portfolio')

<!-- end portfolio section -->

<!-- agency section -->

@include('frontend.about')

<!-- end agency section -->

@include('frontend.booking')

<!-- end agency section -->

<!-- contact section -->

@include('frontend.contact')

<!-- end contact section -->




</section>

@endsection