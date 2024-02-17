<section class="portfolio_section">

  @php

  $portfolioData = App\Models\Portfolio::find(1);

  @endphp
  <div class="heading_container">
    <h2>
      {{ $portfolioData->title }}
    </h2>
    <p>
      {{ $portfolioData->short_text }}
    </p>
  </div>
  <div class="portfolio_container layout_padding">

    @php
    $allMultiImage = App\Models\MultiImage::all();
    @endphp


    <div class="box-1">
      <div class="container">
        <div class="row">

          @foreach ($allMultiImage as $item )
          <div class="img-box b-1">
            <img src="{{ (!empty($item->multi_image)) ? url($item->multi_image): url('/upload/no_image.jpg') }}" alt="">

          </div>
          @endforeach
        </div><!-- /.row -->

      </div><!-- /.container -->




      {{-- <div class="img-box b-1">
        <img
          src="{{ (!empty($portfolioData->portfolio_image)) ? url($portfolioData->portfolio_image): url('/upload/no_image.jpg') }}"
          alt="">

      </div>
      <div class="img-box b-1">
        <img
          src="{{ (!empty($portfolioData->portfolio_image)) ? url($portfolioData->portfolio_image): url('/upload/no_image.jpg') }}"
          alt="">

      </div>
      <div class="img-box b-1">
        <img
          src="{{ (!empty($portfolioData->portfolio_image)) ? url($portfolioData->portfolio_image): url('/upload/no_image.jpg') }}"
          alt="">

      </div> --}}
    </div>

  </div>
</section>