<section class="contact_section layout_padding" id="bookings">
  <div class="container px-0">
    <div class="heading_container">
      <h2 class="">
        Bo<span>ok</span> Us
      </h2>
    </div>
    

  </div>
  <div class="container container-bg">
    <div class="row">

      <div class="col-md-12 col-lg-12 px-0">
        <form action="{{ route('bookings.store') }}" method="POST">
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
            <input type="text" class="message-box" placeholder="Details about you booking destinations"
              name="message" />
          </div>
          <div class="d-flex ">
            <button type="submit" class="btn">Book Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>