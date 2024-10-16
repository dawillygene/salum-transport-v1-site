<?php include "layout/header.php"; ?>
<style>
  .clients-list {
    padding: 50px 0;
    background-color: #f8f9fa;
  }

  .heading-title {
    font-size: 32px;
    color: #343a40;
  }

  .subtitle {
    margin-top: 10px;
    font-size: 16px;
    color: #6c757d;
  }

  .clients-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
    margin-top: 30px;
  }

  .client-item {
    background-color: #ffffff;
    padding: 15px;
    text-align: center;
    font-weight: bold;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .client-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
  }

  @media (max-width: 768px) {
    .clients-grid {
      grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    }
  }
</style>

<div class="module-content module-search-warp">
  <div class="pos-vertical-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
          <form class="form-search">
            <input class="form-control" type="text" placeholder="type words then enter" />
            <button></button>
          </form>
        </div>
      </div>
    </div>
  </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
</div>
<section class="slider slider-2" id="slider-2">
  <div class="container-fluid pe-0 ps-0">
    <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
      <div class="slide bg-overlay bg-overlay-dark-slider-2">
        <div class="bg-section"><img src="assets/images/sliders/3.jpg" alt="Background" /></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-7">
              <div class="slide-content">
                <h1 class="slide-headline">Salum Transport company LTD</h1>
                <p class="slide-desc">Welcome to Salum Transport Company Limited, located in Mwera Kigorofani, Zanzibar. We are proud to offer reliable fuel sales, including petrol, diesel, and kerosene, as well as efficient transportation services for hotel staff across the island.</p>
                <div class="slide-action"><a class="btn btn--primary" href="page-services.html"> <span>our services</span><i class="energia-arrow-right"></i></a><a class="btn btn--white justify-content-center" href="page-about.html">more about us!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide bg-overlay bg-overlay-dark-slider-2">
        <div class="bg-section"><img src="assets/images/sliders/2.jpg" alt="Background" /></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-7">
              <div class="slide-content">
                <h1 class="slide-headline">Reliable Fuel Supply & Transportation Solutions in Zanzibar</h1>
                <p class="slide-desc">Welcome to Salum Transport Company Limited, located in Mwera Kigorofani, Zanzibar. We are proud to offer reliable fuel sales, including petrol, diesel, and kerosene, as well as efficient transportation services for hotel staff across the island.</p>
                <div class="slide-action"><a class="btn btn--primary" href="page-services.html"> <span>our services</span><i class="energia-arrow-right"></i></a><a class="btn btn--white justify-content-center" href="page-about.html">more about us!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="features-bar bg-overlay bg-overlay-theme3" id="featuresBar-1">
  <div class="bg-section"> <img src="assets/images/background/3.jpg" alt="background" /></div>
  <div class="container">
    <div class="row g-0 features-holder">
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">

        <div class="feature-panel">
          <div class="feature-content"><i class="flaticon-024-energy"></i>
            <h5>Save Your Money</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-panel">
          <div class="feature-content"><i class="flaticon-009-ecology-1"></i>
            <h5>Five Stars Service</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-panel">
          <div class="feature-content"><i class="flaticon-028-greenhouse"></i>
            <h5>Home Is Energy</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-panel">
          <div class="feature-content"><i class="flaticon-026-world"></i>
            <h5>Consultation &amp; Planning</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-panel">
          <div class="feature-content"><i class="flaticon-038-ecology"></i>
            <h5>Certified Drivers</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        <div class="feature-panel">
          <div class="feature-content"><i class="flaticon-003-fuel-1"></i>
            <h5>Unbeatable Pricing</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="more-features more-features-2">
        <p>Experience reliable transportation and fuel services with Salum Transport</p>
        <a class="btn btn--bordered btn--white" href="services.html">explore our services</a>
      </div>
    </div>
  </div>
</section>
<section class="services services-2 bg-grey" id="services-2">
  <div class="container">
    <div class="heading heading-2">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2 class="heading-title">Your Trusted Partner for Fuel Supply and Staff Transportation Across Zanzibar.</h2>
        </div>
        <div class="col-12 col-lg-6">
          <p class="heading-desc">Salum Transport Company Limited provides high-quality fuel products, including petrol, diesel, and kerosene, to meet the growing demands of businesses and individuals in Zanzibar. Additionally, we offer reliable staff transportation services for hotel employees, ensuring timely and safe travel to their residences across the island.</p>
          <div class="actions-holder">
            <a class="btn btn--primary" href="page-about.html">
              read more<i class="energia-arrow-right"></i>
            </a>
            <a class="btn btn--bordered btn--white" href="page-services.html">
              find your solution
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
      <div>
        <div class="service-panel services-panel-2">
          <div class="service-icon"><i class="flaticon-030-fuel-pump"></i></div>
          <div class="service-content">
            <h4><a href="services-fuel.html">Fuel Supply Services</a></h4>
            <p>We supply premium-grade petrol, diesel, and kerosene to customers across Zanzibar, ensuring you get reliable energy for all your needs.</p>
            <a class="btn btn--secondary" href="services-fuel.html">read more <i class="energia-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div>
        <div class="service-panel services-panel-2">
          <div class="service-icon"><i class="flaticon-050-bus"></i></div>
          <div class="service-content">
            <h4><a href="services-transport.html">Staff Transportation Services</a></h4>
            <p>Our bus transportation service ensures hotel staff are safely and punctually transported to their residences from any hotel in Zanzibar.</p>
            <a class="btn btn--secondary" href="services-transport.html">read more <i class="energia-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-5 offset-lg-7">
        <div class="more-services more-services-2">
          <div class="rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p><a href="javascript:void(0)">99.9% customer satisfaction</a> based on 500+ reviews and successful fuel deliveries and transportation services across Zanzibar.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about about-2" id="about-2">
  <div class="about-wrapper">
    <div class="video-wrapper">
      <div class="video video-2" id="video-2">
        <div class="bg-section"><img src="assets/images/video/2.jpg" alt="background" /></div>
        <a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=csgiSpA12v8"> <i class="fas fa-play"></i></a>
      </div>
    </div>
    <div class="about-block-wrapper">
      <div class="about-block">
        <div class="heading heading-1">
          <p class="heading-subtitle heading-subtitle-bg">Leading Fuel Distribution and Transportation Services</p>
          <h2 class="heading-title">Your Trusted Partner in Zanzibar for Fuel Supply and Staff Transportation!</h2>
          <p class="heading-desc">Salum Transport Company is committed to providing reliable and cost-effective fuel and transportation solutions. With years of experience, we ensure efficient supply chain management, timely deliveries, and safe transportation services for businesses and individuals across Zanzibar.</p>
          <div class="signature-block">
            <a class="btn btn--secondary" href="page-about.html">read more <i class="energia-arrow-right"></i></a>
            <div class="signature-body">
              <h6>Salum Tom</h6>
              <p>Founder & CEO</p>
              <img class="signature-img" src="assets/images/signature/1.png" alt="signature" />
            </div>
          </div>
          <div class="advantages-list-holder">
            <div class="row">
              <div class="col-12 col-md-6">
                <p>How can we meet Zanzibar's growing demand for fuel and efficient transport?</p>
              </div>
              <div class="col-12 col-md-6">
                <ul class="list-unstyled advantages-list">
                  <li>Reliable fuel supply chain</li>
                  <li>Timely and safe transportation</li>
                  <li>Customer-focused service</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="clients-list" id="clients-list">
  <div class="container">
    <div class="heading heading-8">
      <div class="row">
        <div class="col-12 col-lg-5">
          <h2 class="heading-title text-uppercase">Our Valued Clients</h2>
          <p class="subtitle">We are proud to have partnered with these remarkable brands.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul class="list-unstyled clients-grid d-flex flex-wrap justify-content-between">
          <li class="client-item">CRJE</li>
          <li class="client-item">DALTE</li>
          <li class="client-item">RIU PALACE</li>
          <li class="client-item">RIU JAMBO</li>
          <li class="client-item">ZANZIBAR MUNICIPAL</li>
          <li class="client-item">SUFA SECONDARY SCHOOL</li>
          <li class="client-item">ESQUE ZALU</li>
          <li class="client-item">TOTAL</li>
          <li class="client-item">TRANSWORLD AVIATION</li>
          <li class="client-item">3 WASANIFU</li>
          <li class="client-item">ZANZIBAR BEACH VILLAGE</li>
          <li class="client-item">BAWE RETREAT LIMITED</li>
          <li class="client-item">GOLD ZANZIBAR BEACH HOUSE & SPA</li>
          <li class="client-item">FUMBA LODGE</li>
          <li class="client-item">MATEMWE MUYUNI LTD</li>
          <li class="client-item">NUNGWI LTD HOTEL RIU PALACE ZNZ</li>
          <li class="client-item">NUNGWI LTD HOTEL RIU JAMBO ZNZ</li>
          <li class="client-item">WHITE SANDS BEACH RESORTS LTD</li>
          <li class="client-item">KENDWA ROCKS BEACH HOTEL</li>
          <li class="client-item">RELIANCE HOTEL & RESORT</li>
          <li class="client-item">THE RESIDENCE ZNZ</li>
          <li class="client-item">BAYHIT ZANZIBAR LIMITED</li>
          <li class="client-item">NUNGWI VILLAGE BEACH RESORT</li>
          <li class="client-item">THE MORA ZNZ - PALOLLO COMPANY LTD</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="processes processes-1 bg-overlay bg-overlay-theme4" id="processes-1">
  <div class="bg-section">
    <img src="assets/images/background/wavy-pattern.png" alt="Background" />
  </div>
  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="block-right-holder">
        <div class="heading heading-light heading-light2">
          <p class="heading-subtitle">How It Works!</p>
          <h2 class="heading-title">Efficient Transport and Fuel Services for Your Business</h2>
        </div>
        <div class="counters-holder">
          <div class="counter counter-3">
            <div class="counter-holder">
              <div class="counter-num">
                <span class="counting" data-counterup-nums="15" data-counterup-beginat="10">15</span>
              </div>
              <div class="counter-img">
                <div class="bg-section">
                  <img src="assets/images/counters/1.jpeg" alt="Years of Service" />
                </div>
                <i class="flaticon-020-truck"><img src="assets/images/counters/1.jpeg" alt="Years of Service" /></i>
              </div>
            </div>
            <div class="counter-desc">
              <p>Years of Excellence in Fuel Sales and Transport Services</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="processes-holder">
        <div class="carousel owl-carousel carousel-dots process-content-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="false" data-speed="800">
          <div>
            <div class="process-panel">
              <p class="process-number">01.</p>
              <div class="process-body">
                <div class="process-content">
                  <h5>Fuel Supply</h5>
                  <p>We provide reliable fuel supply services for petrol, diesel, and kerosene. Our efficient distribution ensures your business runs smoothly with high-quality fuel delivered directly to your location.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="process-panel">
              <p class="process-number">02.</p>
              <div class="process-body">
                <div class="process-content">
                  <h5>Bus Transportation Services</h5>
                  <p>Salum Transport offers bus transportation for staff across all hotels in Zanzibar, ensuring timely and safe commutes. Our modern fleet is maintained to the highest standards for reliable service.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="process-panel">
              <p class="process-number">03.</p>
              <div class="process-body">
                <div class="process-content">
                  <h5>Continuous Support</h5>
                  <p>Our team is available 24/7 to provide support for any transportation or fuel delivery needs. We ensure smooth operations by offering consistent and dependable services.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="images-holder">
          <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-drag="false" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800">
            <img src="assets/images/processes/fuel.jpeg" style="width:100%"  alt="Fuel Delivery" />
            <img src="assets/images/processes/bus-transport.png" alt="Bus Transportation" />
            <img src="assets/images/processes/1.jpg" style="width:100%"  alt="Customer Support" />
          </div>
          <div class="processes-panel">
            <h3 class="panel-title">Reliable Fuel and Transportation Services Across Zanzibar!</h3>
            <p class="panel-desc">Our commitment ensures timely deliveries, cost efficiency, and the highest standards of service!</p>
            <a href="page-contact.html">Schedule A Service <i class="energia-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
<section class="testimonial testimonial-2">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5">
        <div class="heading heading-9">
          <h2 class="heading-title">Customer Testimonials</h2>
        </div>
      </div>
      <div class="col-12">
        <div class="img-hotspot img-hotspot-2">
          <div class="img-hotspot-wrap">
            <div class="img-hotspot-bg">
              <img src="assets/images/background/world-map.png" alt="world map background" />
            </div>
            <div class="img-hotspot-pointers">
              <div class="img-hotspot-pointer" data-spot-x="12%" data-spot-y="25%">
                <img src="assets/images/testimonial/thumbs/1.jpg" alt="customer" />
                <div class="info right" data-info-x="-20px" data-info-y="-152px">
                  <span>Salum Transport has been an incredible partner for our business. Their timely fuel deliveries have kept our operations running smoothly. Excellent service!</span>
                </div>
              </div>
              <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%">
                <img src="assets/images/testimonial/thumbs/2.jpg" alt="customer" />
                <div class="info right" data-info-x="-20px" data-info-y="-152px">
                  <span>The bus transportation service for our staff is punctual and reliable. Salum Transport ensures our team gets to and from work safely and on time every day.</span>
                </div>
              </div>
              <div class="img-hotspot-pointer" data-spot-x="79%" data-spot-y="15%">
                <img src="assets/images/testimonial/thumbs/3.jpg" alt="customer" />
                <div class="info right" data-info-x="-20px" data-info-y="-152px">
                  <span>We’ve worked with Salum Transport for years, and their professionalism is unmatched. From fuel sales to logistics, they always deliver top-notch service.</span>
                </div>
              </div>
              <div class="img-hotspot-pointer" data-spot-x="21%" data-spot-y="36%">
                <img src="assets/images/testimonial/thumbs/4.jpg" alt="customer" />
                <div class="info right" data-info-x="-20px" data-info-y="-152px">
                  <span>Their customer support is outstanding. Whenever we have an issue, they resolve it quickly and efficiently. I highly recommend Salum Transport.</span>
                </div>
              </div>
              <div class="img-hotspot-pointer" data-spot-x="70%" data-spot-y="39%">
                <img src="assets/images/testimonial/thumbs/5.jpg" alt="customer" />
                <div class="info right" data-info-x="-20px" data-info-y="-152px">
                  <span>Salum Transport is our trusted fuel supplier. Their deliveries are always on time, and their team is professional and friendly.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="cta-holder">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="cta">
          <div class="cta-img">
            <img src="assets/images/cta/3.jpg " style="width: 100%;" alt="Salum Transport Fuel Truck" />
            <div class="cta-icon">
              <i class="energia-phone-Icon"></i>
            </div>
          </div>
          <div class="cta-body">
            <h5>Reliable Fuel Supply & Transportation Services</h5>
            <div class="cta-content">
              <p>Salum Transport provides on-time fuel  and safe bus transportation for your staff. If you have any questions or need assistance, feel free to contact us at +255 777 416 880</p>
              <a class="btn btn--bordered btn--white" href="contact-us.html">Contact Us <i class="energia-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="more-actions">
          <p>Fuel solutions and reliable transportation services tailored for your needs. <a href="services.html">Find Out More!</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "layout/footer.php"; ?>