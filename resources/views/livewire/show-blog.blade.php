<main>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="{{ url('front/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">
  
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
              <h1>Blog</h1>
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
  



    <!-- blog Section -->
    <section id="pricing" class="pricing section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Blog</h2>
          <div><span>Check Our</span> <span class="description-title">Blog</span></div>
        </div><!-- End Section Title -->
  
        <div class="container">
  
        <div class="row gy-4">
          <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
            @isset($blogs)
            @foreach ($blogs as $blog)
            <div class="col-lg-6 mb-3" data-aos="zoom-in" data-aos-delay="100">
              <div class="pics"><img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt=""></div>
              <div class="pricing-item">
                <h3>{{$blog->title}}</h3>
                <p><span class="blog-right float-right small"><strong>Author Name: </strong>{{$blog->author}}</span><br>
                <span class="text-left small"><strong>Published Date: </strong>{{ \Carbon\Carbon::parse($blog->published_at)->format('d M, Y') }}</span></p>
                <p class="description">{!! $blog->content !!}</p>
  
                <a href="{{ route('blogDetail', $blog->slug)}}" class="cta-btn">View details</a>
              </div>
            </div><!-- End Pricing Item -->
            @endforeach
            {{$blogs->links()}}
            @endisset
            </div>
          </div>

          <div class="col-lg-4 px-5 pt-4" data-aos="zoom-in" data-aos-delay="100">
            <h3>Category</h3>
            <div class="card">
            @foreach ($category as $category1)
                <a href="{{route('blog').'?categoryValue='.$category1->slug}}" class="blog-cat cta-btn m-0">{{$category1->name}}</a>
            @endforeach
            </div>
          </div>


        </div>
  
        </div>
  
      </section><!-- /Pricing Section -->
  
      
  
</main>