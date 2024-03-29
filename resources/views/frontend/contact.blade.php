<section class="contact_section layout_padding" id="contact">
  <div class="container px-0">
    <div class="heading_container">
      <h2 class="">
        Con<span>ta</span>ct Us
      </h2>
    </div>

  </div>
  <div class="container container-bg">
    <div class="row">
      <div class="col-lg-8 col-md-7 px-0">
        <div class="map_container">
          <div class="map-responsive">
            <iframe
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
              width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-4 px-0">
        <form action="{{ route('store.message') }}" method="POST">
          @csrf
          <div>
            <input type="text" placeholder="Name" name="name" />
          </div>
          <div>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <div>
            <input type="text" placeholder="Phone" name="phone" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" name="message" />
          </div>
          <div class="d-flex ">
            <button type="submit" class="btn">send massage</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>