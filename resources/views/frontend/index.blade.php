<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospice of St. Margaret of Cortona</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('assets/img/logo_st_margaret.png') }}" type="image/x-icon" sizes="16x16"">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      {{-- <h1 class="logo me-auto"><a href="{{ route ('frontend.index') }}">Presento<span>.</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route ('frontend.index') }}" class="logo me-auto"><img src="{{ asset('assets/img/logo_nobg.png') }}" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#whatwedo">What We Do</a></li>
          <li><a class="nav-link scrollto" href="#services">Social Services</a></li>
          <li><a class="nav-link scrollto " href="#orgchart">Organizational Chart</a></li>
          <li><a class="nav-link scrollto" href="#calendar">Calendar of Activities</a></li>
          <li><a class="nav-link scrollto" href="#contactus">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-end">
        <div class="col-xl-6">
          <h1>Hospice of St. Margaret of Cortona, Inc.</h1>
          <h2>Franciscan Sisters of the Sacred Heart</h2>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch">
              <div class="content">
                <h3>Hospice of St. Margaret of Cortona, Inc.</h3>
                <h3>(History) </h3>
                <p>
                    The Mission Center started as a community-based child welfare service located in Calauan, Laguna through the invitation of the Salesian Priest through Mo. Flora Zippo, SFSC former Delegate Superior of the Franciscan Sisters of the Sacred Hearts marks the beginning of the apostolate and this Mission Center was named after Madre Giovanna Zippo, SFSC. Former Mother General.
                  <br>
                    It was through Mo. Flora Zippo’s passion and love for the poor that inspire them to carry apostolate mission which will cater poor and disadvantaged children and families. And she wants to inculcate to children the value of spirituality, joy and simplicity as Franciscan.
                  <br>
                    This Mission Center was established in year 2011 as a shelter for needy indigent, homeless and abandoned children. Likewise, mostly admitted in the shelter were coming the big number of resettled families of the government from slum areas in Manila particularly along the Pasig River and some of them are referred by DSWD like exploited and abused and with other special cases.
                </p>

              </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Mission
                    </h4>
                    @foreach($missions as $mission)

                    <p class="text-white">{{$mission->mission}}</p>
                     @endforeach
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Vision </h4>
                      @foreach($visions as $vision)
                      <p class="text-white">{{$vision->vision}}</p>
                       @endforeach
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

    <!-- ======= What We Do Section ======= -->
    <section id="whatwedo" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>What We Do</h2>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center mb-4">
              <h3>Hospice of St. Margaret's Photo Gallery</h3>
            </div>
          </div>

       <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" >
            @foreach ($galleries as $gallery)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              </a>
                  <div class="portfolio-wrap">
                    <img src="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" alt="Image" style =" width: 100%;">
                  <div class="portfolio-info">
                    <p>
                      {{ $gallery -> gallery_date }}
                    </p>
                      <div class="portfolio-links">
                      <p>
                        <a href="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" data-gall="" class="venobox" title="Gallery">{{ $gallery -> gallery_description }}
                        </a>
                      </p>
                      </div>
                  </div>
                </div>
            </div>
            @endforeach
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Programs & Services</h2>
          <p>We offer Programs and Social Services that provides shelter, gives nurture and develop youth. We create positive environment where people—the young ones or even adults, develop tools and are empowered to have successful, fulfilling lives.</p>
        </div>

        <div class="row">
            @foreach($programs as $program)
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-holding-hands"></i>
              <h4>{{ $program -> title }}</></h4>
              <p>{{ $program -> description }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Org Chart ======= -->
  <section id="orgchart" class="testimonials">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Organizational Chart</h2>
        <p>Relying heavily volunteers. Here are the Staff and the Volunteers positions that make up the human resources of our Charity.</p>
      </div>
    </div>

    <div class="container-fluid">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <ol class="list-group list-group-numbered col-md-12">

            @foreach ($organizations as $organization)
            <div class="p-3 mb-2" style="background-color: #05192e">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div class="mx-auto">
                <div class="fw-bold"><h3 class="text-center font-weight-bold" style="padding-bottom: 5px">{{$organization->org_position}}</h3>
                </div>
                <h4 class="text-center">{{$organization->org_name}}</h4>
              </div>
            </li>
            </div>
            @endforeach

          </ol>

        </div>
      </div>
    </section><!--  End Org Chart  -->

    <!-- ======= Calendar of Activities Section ======= -->
    <section id="calendar" class="team section-bg">
        <div class="container" data-aos="fade-up">


          <div class="section-title">
            <h2>Calendar of Activities</h2>
             @if ($month === null)
            @else
            <h3>Month of {{$month->formatted_date_month}}</h3>
            @endif

          </div>


          <div class="row">
             <?php $count=0; ?>
            @foreach ($calendars as $calendar)
            <div class="col-lg-4 mb-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <h4 class="card-header text-dark text-center">{{$calendar->formatted_date}}</h4>
                <img class = "mx-auto mt-3" src="{{ asset("/storage/calendar_images/".$calendar->act_image) }}"  height="180px" alt="Activity Image"/>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-text text-primary text-center fw-bold">{{$calendar->act_description}}</h6>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contactus" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">
            @foreach($contacts as $contact)
            <div class="row">
                <div class="col-md-12 mb-5">
                  <div class="info-box">
                    <i class="bx bx-donate-heart"></i>
                    <h3>Donation</h3>
                    <p><strong>Bank Name: </strong>{{ $contact -> bank_name }}</p>
                    <p><strong>Bank Branch: </strong>{{$contact -> bank_branch}}</p>
                    <p><strong>Bank Account #: </strong>{{$contact -> bank_act_num}}</p>
                    <p><strong>Swift Code #: </strong>{{$contact -> swift_code_num}}</p>
                  </div>
                </div>
              </div>

            {{-- <div class="row">

              <div class="col-md-4">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box mt-4">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div> --}}

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Hospice of St. Margaret of Cortona, Inc<span>.</span></h3>
            <p>
              <br>{{ $contact -> address }}<br><br>
              <strong>Phone:</strong> <br> {{ $contact -> contact_number }} <br> {{ $contact -> contact_number1 }} <br> <br>
              <strong>Email:</strong> {{ $contact -> email_add }}<br>
            </p>
          </div>

        @endforeach
        <div class="col-lg-8 col-md-4">
            <img src="{{ asset('/assets/img/map.jpg') }}" class="img-fluid" alt="map">
        </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Hospice fo St. Margaret</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
