<div class="vertical-menu">

  <div data-simplebar class="h-100">

    <!-- User details -->


    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Home Slider</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('add.home.slide') }}">All Slides</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Services</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('services.all') }}">All Services</a></li>
            <li><a href="{{ route('services.add') }}">Add Services</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-layout-3-line"></i>
            <span>Portfolio</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('portfolio.all') }}">All Portfolio</a></li>
            <li><a href="{{ route('portfolio.add') }}">Add Portfolio</a></li>
            <li><a href="{{ route('portfolio.multi') }}">Add Multi Portfolio</a></li>
            <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>About</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('about.add') }}">Add About</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Bookings</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('bookings.all') }}">All Bookings</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Contact</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('contact.all') }}">All Contacts</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>