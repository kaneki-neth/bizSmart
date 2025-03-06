@extends('web.layout.default')

@section('content')
<main class="main main-archive">
  <div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/digital_archive">Digital Archive</a>
        </li>
        <li
          class="breadcrumb-item active dmsans-semi-bold"
          aria-current="page">
          Abaca + Bacbac Mat #125
        </li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-lg-6">
        <!-- Material Information -->
        <h1 class="material-title">Abaca + Bacbac Mat #125</h1>

        <div class="category-section d-flex align-items-center">
          <div class="category-label">Category</div>
          <span class="category-tag me-2">Natural</span>
          <span class="category-tag">Aluminum</span>
        </div>

        <div class="year-section d-flex align-items-center">
          <div class="year-label">Year</div>
          <span class="year-tag me-2">2022</span>
        </div>

        <div class="properties-section d-flex align-items-center">
          <div class="properties-label">Properties</div>
          <span class="properties-tag me-2">lightweight</span>
          <span class="properties-tag me-2">corrosion-resistant</span>
          <span class="properties-tag me-2">recyclable</span>
        </div>

        <div class="material-code d-flex align-items-center">
          <div class="material-code-title">Material Code</div>
          <span>MT-01-2025-001</span>
        </div>

        <div class="material-description mt-5">
          <h3 class="archive-section-heading">Description</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
            non justo nec urna euismod pulvinar. Aenean pellentesque massa
            in vulputate blandit. Quisque vehicula eu diam ac tincidunt.
            Phasellus malesuada quam libero, non vehicula velit egestas non.
            Mauris pharetra interdum at ornare tellus, et vitae convallis
            odio. Aenean at facilisis nulla cras eleifend sagittis accumsan
            enim. Morbi viverra erat felis adipiscing vel orci non molestie.
            Vivamus sed nibh ligula. Nullam vitae ante sed tortor cursus
            gravida sed vel erat. Fusce vehicula hendrerit dolor non rutrum.
            Donec at ornare augue, nec ultricies diam. Pellentesque varios
            tortor ut urna molestie, quis convallis felis luctus. Proin sed
            ornare arcu. Vitae malesuada ante. Nam ultricies ipsum lacus, et
            faucibus dui ultricies id. Aenean sit amet, rhoncus sed
            fringilla non porta quis metus.
          </p>
        </div>

        <div class="source-section mt-4">
          <h3 class="archive-section-heading">Source</h3>
          <p>UPC-MC Research Archive</p>
        </div>

        <div class="technical-properties mt-5">
          <h3 class="archive-section-heading">Technical Properties</h3>
          <div class="technical-property">
            <div>Density (g/cm³)</div>
            <div>0.91 g/cm³</div>
          </div>
          <div class="technical-property">
            <div>Melting Point (°C)</div>
            <div>130-171 °C</div>
          </div>
          <div class="technical-property">
            <div>Tensile Strength (MPa)</div>
            <div>38 MPa</div>
          </div>
          <div class="technical-property">
            <div>Thermal Conductivity (W/mK)</div>
            <div>0.22 W/mK</div>
          </div>
          <div class="technical-property">
            <div>Chemical Resistance</div>
            <div>Resistant to acid and bases</div>
          </div>
        </div>

        <div class="sustainability-section mt-5">
          <h3 class="archive-section-heading">
            Sustainability & Applications
          </h3>
          <div class="sustainability-property">
            <div>Recyclability</div>
            <div>
              <i class="bi bi-recycle recyclable-icon"></i> Yes, commonly
              recycled (Code 5)
            </div>
          </div>
          <div class="sustainability-property">
            <div>Biodegradability</div>
            <div>No</div>
          </div>
          <div class="sustainability-property">
            <div>Upcycled Uses</div>
            <div>reusable for injection molding</div>
          </div>
          <div class="sustainability-property">
            <div>Common applications</div>
            <div>packaging, automotive, textiles</div>
          </div>
        </div>

        <div
          class="generate-qr"
          data-bs-toggle="modal"
          data-bs-target="#qrModal">
          <i class="bi bi-qr-code-scan"></i>
          <span>Generate material QR code</span>
        </div>
      </div>

      <div class="col-lg-6 position-relative">
        <div class="material-image">
          <img
            src="{{url('web/assets/img/matix/materials/archive-2.png')}}"/>
        </div>

        <div class="material-thumbnails-wrapper">
          <div class="nav-arrow prev-arrow">
            <i class="bi bi-chevron-left"></i>
          </div>
          <div class="material-thumbnails">
            <div class="thumbnail">
              <img
                src="{{url('web/assets/img/matix/materials/archive-1.png')}}"/>
            </div>
            <div class="thumbnail active">
              <img
                src="{{url('web/assets/img/matix/materials/archive-2.png')}}"/>
            </div>
            <div class="thumbnail">
              <img
                src="{{url('web/assets/img/matix/materials/archive-3.png')}}"/>
            </div>
            <div class="thumbnail">
              <img
                src="{{url('web/assets/img/matix/materials/archive-4.png')}}"/>
            </div>
            <div class="thumbnail">
              <img
                src="{{url('web/assets/img/matix/materials/archive-5.png')}}"/>
            </div>
          </div>
          <div class="nav-arrow next-arrow">
            <i class="bi bi-chevron-right"></i>
          </div>
        </div>
      </div>

      <section
        class="mt-5"
        id="about-materials"
        data-aos="fade-up"
        data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex justify-content-between">
              <h3 class="arial_narrow_7">More Materials</h3>
            </div>
            <div class="slides col-12 mt-5">
              <div class="materials owl-carousel owl-theme">
                <div class="item">
                  <div style="width: 80%">
                    <img
                      src="{{url('web/assets/img/matix/materials/digital_archive.png')}}"
                      class="" />
                  </div>
                  <div>
                    <h6 class="dmsans-semi-bold mt-3 mb-2">
                      Abaca + Bacbac Mat #125
                    </h6>
                  </div>
                </div>

                <div class="item">
                  <div style="width: 80%">
                    <img
                      src="{{url('web/assets/img/matix/materials/digital_archive.png')}}"
                      class="" />
                  </div>
                  <div>
                    <h6 class="dmsans-semi-bold mt-3 mb-2">
                      Abaca + Bacbac Mat #125
                    </h6>
                  </div>
                </div>

                <div class="item">
                  <div style="width: 80%">
                    <img
                      src="{{url('web/assets/img/matix/materials/digital_archive.png')}}"
                      class="" />
                  </div>
                  <div>
                    <h6 class="dmsans-semi-bold mt-3 mb-2">
                      Abaca + Bacbac Mat #125
                    </h6>
                  </div>
                </div>

                <div class="item">
                  <div style="width: 80%">
                    <img
                      src="{{url('web/assets/img/matix/materials/digital_archive.png')}}"
                      class="" />
                  </div>
                  <div>
                    <h6 class="dmsans-semi-bold mt-3 mb-2">
                      Abaca + Bacbac Mat #125
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div
        class="modal fade"
        id="qrModal"
        tabindex="-1"
        aria-labelledby="qrModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body text-center">

              <img src="{{url('web/assets/img/matix/materials/QR Code.png')}}" class="qr img-fluid" />
              <div class="mt-0">
                <h5>Abaca + Bacbac Mat #125</h5>
                <p class="mb-1">MT-01-2025-001</p>
                <img src="{{url('web/assets/img/mainlogo.png')}}" class="logo-archive img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>

  $("#nav-archive").addClass("active");

  // Elements
  const thumbnails = document.querySelectorAll(".thumbnail");
  const mainImage = document.querySelector(".material-image img");
  const thumbnailsContainer = document.querySelector(
    ".material-thumbnails"
  );
  const prevArrow = document.querySelector(".prev-arrow");
  const nextArrow = document.querySelector(".next-arrow");

  let currentIndex = 1;
  let autoplayTimer;

  // Handle thumbnail clicks
  thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener("click", function() {
      updateActiveImage(index);
    });
  });

  // Navigation arrows
  prevArrow.addEventListener("click", () => {
    currentIndex =
      (currentIndex - 1 + thumbnails.length) % thumbnails.length;
    updateActiveImage(currentIndex);
  });

  nextArrow.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % thumbnails.length;
    updateActiveImage(currentIndex);
  });

  // Update active image and thumbnail
  function updateActiveImage(index) {
    // Update main image
    mainImage.src = thumbnails[index].querySelector("img").src;

    // Update active class
    thumbnails.forEach((t) => t.classList.remove("active"));
    thumbnails[index].classList.add("active");

    // Scroll thumbnail into view if needed
    thumbnails[index].scrollIntoView({
      behavior: "smooth",
      block: "nearest",
      inline: "center",
    });

    currentIndex = index;
    resetAutoplay();
  }

  // Autoplay functions
  function startAutoplay() {
    autoplayTimer = setInterval(() => {
      currentIndex = (currentIndex + 1) % thumbnails.length;
      updateActiveImage(currentIndex);
    }, 60000);
  }

  function resetAutoplay() {
    clearInterval(autoplayTimer);
    startAutoplay();
  }

  // Start autoplay
  startAutoplay();

  // Pause on hover
  thumbnailsContainer.addEventListener("mouseenter", () =>
    clearInterval(autoplayTimer)
  );
  thumbnailsContainer.addEventListener("mouseleave", startAutoplay);

  $(function() {
    // Owl Carousel
    var owl = $(".materials");
    owl.owlCarousel({
      items: 4,
      margin: 10,
      loop: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
    });
  });
</script>
@endsection