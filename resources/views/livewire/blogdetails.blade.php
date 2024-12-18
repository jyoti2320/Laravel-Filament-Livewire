<main>
        <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
            <img src="{{ url('front/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">
      
            <div class="container">
              <div class="row gy-4 justify-content-between">
                <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
                  <h1>Blog Details</h1>
                  <p>We are team of talented designers making websites with Bootstrap</p>
                </div>
              </div>
            </div>
      
            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
              <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
              </defs>
              <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
              </g>
              <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
              </g>
              <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
              </g>
            </svg>
      
          </section><!-- /Hero Section -->
      

          <!-- Details Section -->
    <section id="details" class="details section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Details</h2>
        <div><span>Check Our</span> <span class="description-title">Details</span></div>
      </div><!-- End Section Title -->

      <div class="container">
        @isset($blogs)
        @foreach ($blogs as $blog)
        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>{{$blog->title}}</h3>
            <p><span class="blog-right float-right small"><strong>Author Name: </strong>{{$blog->author}}</span><br>
                <span class="text-left small"><strong>Published Date: </strong>{{ \Carbon\Carbon::parse($blog->published_at)->format('d M, Y') }}</span></p>
            <p class="fst-italic">
                {!! $blog->content !!}
            </p>
          </div>
        </div><!-- Features Item -->
        @endforeach
        @endisset
      
      </div>

    </section><!-- /Details Section -->

          
      
</main>