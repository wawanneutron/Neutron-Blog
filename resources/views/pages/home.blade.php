@extends('layouts.appHome')

@section('title','Neutron Blog' )
    
@section('content')

    <!-- header -->
    <main class="header">
      <div class="bg-home"></div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-sm-10">
            <p>Hello, my name is</p>
            <h2 class="text-header">
              Wawan Setiawan
            </h2>
            <h2>And i'm a <span class="typing"></span></h2>
            <a href="#home" class="btn btn-cte">Get Started</a>
          </div>
          <div class="col-lg-5 d-lg-block d-none">
          <img src="{{ url('/frontend/images/Design community-pana.png') }}" alt="" class="img-header">
          </div>
        </div>
      </div>
      <div class="home-custom-shape-divider-bottom-1601050511">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
            d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
            opacity=".25" class="shape-fill"></path>
          <path
            d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
            opacity=".5" class="shape-fill"></path>
          <path
            d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
            class="shape-fill"></path>
        </svg>
      </div>
    </main>
    <!-- about -->
    <section class="about mt-5 mb-3" id="about">
      <div class="home-custom-shape-divider-top-1601104068">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
            d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
            class="shape-fill"></path>
        </svg>
      </div>
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="about-text">
              <h2> About Me </h2>
              <p>This is about my life</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content-about">
      <div class="container">
        <div class="row justify-content-center text-center ">
          <div class="col-md-6 col-lg-4 about-content">
            <img src="/frontend/images/Pair programming-amico.png" alt="">
            <h3>My Skils</h3>
            <p>I really like programming, sometimes I feel dizzy. I am still learning and continuing to learn, and keep
              spirit of learning</p>
          </div>
          <div class="col-md-6 col-lg-4 about-content">
            <img src="/frontend/images/Teaching-amico.png" alt="">
            <h3>Studies</h3>
            <p>I studied at STMIK Insan Pembangunan, which is in Tangerang Regency, the best campus of all peaople.
            </p>
          </div>
          <div class="col-md-6 col-lg-4 about-content">
            <img src="/frontend/images/Book lover-amico.png" alt="">
            <h3>My Hobies</h3>
            <P>besides coding, I also have a hobby of reading books, besides that my hobby is hiking.</P>
          </div>
        </div>
      </div>
    </section>
    <!-- portfolio -->
    <section class="portfolio pt-5" id="portfolio">
      <div class="custom-shape-divider-bottom-1601279884">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"></path>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-5">
            <img src="/frontend/images/Buffer-bro.png" alt="" class="w-100 img-quote">
          </div>
          <div class="col-lg-5 col-md-5 text-center">
            <p class="quote"> "Aku tidak pernah takut akan seseorang yang telah berlatih melakukan 10.000 tendangan sekali
              waktu, tapi aku
              takut terhadap seseorang yang berlatih melakukan satu tendangan 10.000 kali."<br>-Bruce Lee.</p>
            <a href="#home" class="btn btn-cte mt-2">Let's Get</a>
          </div>
        </div>
        <div class="my-skils">
          <div class="row skil-animate">
            <div class="col-lg-6 mt-5">
              <h3>My skils</h3>
              <p>This is my skill in programming, I am still learning and continuing to learn, and keep spirit of learning
              </p>
            </div>
          </div>
          <div class="row mb-5 progres">
            <div class="col-lg-6 col-md-6 mt-5 ">
              <p>HTML</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar"
                  style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100">89%</div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <p>CSS</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"
                  style="width: 90%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <p>JavaScript</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar"
                  style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <p>PHP</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                  style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <p>Framework Laravel</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar"
                  style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <p>Framework Bootstrap</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar"
                  style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">87%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="section-price-heading" id="testimonialHeading">
        <hr>
        <div class="container pt-5">
          <div class="row">
            <div class="col text-center">
              <h2>Simple Pricing</h2>
              <p>Easy pricing means no suprises.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section-card-price-content" id="testimonialContent">
        <div class="container">
          <div class="section-card-content row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-price">
                <div class="content">
                  <div class="card-body p-5">
                    <div class="text-center">
                      <p>Menerima jasa pembuatan</p>
                      <hr>
                    </div>
                    <ul class="fa-ul pricing-list">
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal "></i>
                        </span>
                        <span class="text-dark">Profile company</span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Portfolio </span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Website
                          Statis</span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal"></i></span><span class="text-dark">Website
                          Dinamis</span>
                      </li>
                    </ul>
                    <hr>
                    <div class="text-center pt-3">
                      <p>Harga bisa didiskusikan</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6  col-md-6 col-lg-4">
              <div class="card card-price ">
                <div class="content">
                  <div class="card-body p-5">
                    <div class="text-center">
                      <p>Apa yang didapat ?</p>
                      <hr>
                    </div>
                    <ul class="fa-ul pricing-list">
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal-costum"></i></span><span
                          class="text-dark">Responsive</span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal-costum"></i></span><span
                          class="text-dark">Terjangkau</span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal-costum"></i></span><span class="text-dark">Design
                          modern</span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal-costum"></i></span><span
                          class="text-dark">Unlimited</span>
                      </li>
                      <li class="pricing-list-item">
                        <span class="fa-li">
                          <i class="far fa-check-circle text-teal-costum"></i></span><span class="text-dark">Free
                          lisensi</span>
                      </li>
                    </ul>
                    <hr>
                    <div class="text-center pt-3">
                      <a href="https://wa.me/6287841936355?text=Saya%20tertarik%20dan%20ingin%20dibuatkan%20website%20dengan%20anda"
                        class="btn btn-call">Call me</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="custom-shape-divider-bottom-1601287837">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
            d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
            class="shape-fill"></path>
        </svg>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="container">
        <div class="contact-header justify-content-center text-center">
          <h3>Contact Us</h3>
          <p>Send your queries</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-5">
            <img src="/frontend/images/Mail sent-amico.png" alt="" class="w-75">
          </div>
          <div class="col-lg-4 col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi neque nam explicabo assumenda cumque rem
              omnis
              veniam, earum aut tempore dolorem, accusamus aspernatur atque eligendi, ab odit illo dolores architecto.</p>
          </div>
          <div class="col-lg-6 col-md-6">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp"></small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Your queries</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-cte">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection