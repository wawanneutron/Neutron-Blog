@extends('layouts.appArtikel')

@section('title', 'Neutron Blog')
    
@section('content')
  <!-- share -->
  <div class="share text-center font-weight-light">
    <p>Share</p>
    <a href="javaScript:;">
      <li class="list-unstyled"><img src="{{ url ('/frontend/images/wa.png') }}" alt=""></li>
      <li class="list-unstyled"><img src="{{ url ('/frontend/images/go.png') }}" alt=""></li>
      <li class="list-unstyled"><img src="{{ url ('/frontend/images/fb.png') }}" alt=""></li>
      <li class="list-unstyled"><img src="{{ url ('/frontend/images/ig.png') }}" alt=""></li>
    </a>
  </div>
     <!-- header -->
  <main class="header">
    <div class="bg-home"></div>
    </div>
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-12 col-sm-10">
          <h1 class="artikel-blog">Perbedaan Frontend & Backend
            <br>
            <span>Tahukah kamu perbedaan front end dan back end ?</span>
          </h1>
          <span class="penulis-header">Ditulis oleh <a href=""> Wawan Setiawan </a>,Tangerang 10 Oktober 2020.
            <br>
            <span class="kategory font-italic">Kategori Technology</span>
          </span>
        </div>
      </div>
    </div>
    <div class="costum-wave-artikel-blog">
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
  <!-- blog artikel -->
  <section class="artikel mt-5 mb-5">
    <div class="custom-shape-divider-top-1601104068">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path
          d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
          class="shape-fill"></path>
      </svg>
    </div>
    <div class="container" id="articel">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="img-judul">
            <img src="/frontend/images/img2.webp" alt="" class="img-fluid mb-2">
          </div>
          <div class="penulis">
            <p>Ditulis oleh <a href=""> Wawan Setiawan </a> Tangerang 10 Oktober 2020 </p>
          </div>
          <div class="isi-kontent">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat nisi necessitatibus alias
              reiciendis porro esse debitis. Expedita dolorum doloribus mollitia corporis accusamus sunt amet tempora
              maxime optio? Maiores, laudantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
              repellat placeat cum quo amet maiores eos ratione cupiditate voluptatem aliquam, repudiandae nisi unde
              exercitationem nesciunt. Ut sapiente facilis doloremque maxime.</p>
            <div class="img-thumb text-center">
              <img src="/frontend/images/img4.webp" class="w-75 mt-4 mb-3 rounded  img-fluid" alt="">
            </div>
            <h2>FrontEnd</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium corrupti reiciendis modi possimus
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolor ipsam eius molestiae veniam deleniti
              voluptatem itaque. Iure commodi magni ullam, ex aperiam temporibus at sint aliquid, consequuntur obcaecati
              nemo blanditiis similique. Ut sed architecto corporis, placeat vel cum similique iste eaque omnis eveniet
              quia voluptas, accusantium nobis et ex veniam optio. Distinctio eveniet eius totam quos? Beatae officiis
              ea harum ducimus, explicabo sapiente temporibus! Quae, repudiandae? Deserunt, facere obcaecati. Odit
              quibusdam soluta inventore nulla expedita cupiditate autem laborum architecto nemo a quam est vero
              repellendus maiores officiis ut illo nihil sed eaque, earum harum? Est, ad tempora suscipit aliquam cum
              explicabo, nemo mollitia ullam consequuntur vel nulla nihil minus voluptatibus. Dolorem quod aliquid
              obcaecati vero similique magnam accusamus error, nostrum beatae amet voluptatem atque possimus perferendis
              culpa dicta, sequi tenetur doloribus reiciendis, soluta nostrum repellat aliquam
              impedit ipsum sit.
              adipisci quae rerum, quaerat magni nostrum itaque quia quos neque harum veritatis autem blanditiis
              laboriosam animi laborum.</p> <br>
            <h2>Backend</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore illum magnam voluptatum perspiciatis,
              sint
              minima at hic, veritatis asperiores libero blanditiis, aperiam laboriosam! Labore, vel? Accusamus corrupti
              ratione sunt at. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui fuga corrupti natus autem
              cupiditate assumenda quos aliquam maxime temporibus voluptates nulla dolore vero numquam impedit, amet
              tempora ratione, quibusdam illo! Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Laboriosam sed, in libero ex nisilabore voluptatibus placeat alias animi, culpa eaque libero
              recusandae incidunt tempora numquam! Impedit repellat dolore nam repellendus esse commodi facere
              necessitatibus nostrum reprehenderit, fugiat corporis optio dignissimos recusandae eveniet exercitationem
              voluptas voluptatum porro dicta culpa quidem illo voluptate cum. Provident iure soluta veniam quas
              architecto in sunt saepe qui magni temporibus doloremque facere quibusdam, aliquid consequatur illum
              possimus omnis maxime veritatis delectus amet sit dolorum blanditiis? Ab rem aliquam a esse neque eaque
              nesciunt itaque cum.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="container">
            <div class="card card-penulis mb-4">
              <div class="card-body">
                <h5>Tentang Penulis</h5>
              <img src="{{ url('/frontend/images/2019-04-23 06.19.29 1.jpg') }}" alt=""
                  class="img-fluid float-left mt-2 mr-3 img-thumbnail rounded" width="130px">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quo voluptates quaerat quae fuga?
                  Impedit corrupti, dolorem voluptatum, quo reiciendis numquam suscipit reprehenderit, aperiam quia qui
                  eius inventore doloremque minus.</p>
              </div>
            </div>
            <div class="card artikel-terkait">
              <div class="card-body">
                <h4>Artikel Terkait</h4>
              </div>
              <div class="card-body body-card">
                <a href="" class="mt-3">
                <img src="{{ url('/frontend/images/img3.webp') }}" alt="" class="rounded float-left img-fluid mr-2" width="120px">
                  <h5>Memahami Dasar Pemrograman</h5>
                </a>
              </div>
              <div class="card-body body-card">
                <a href="" class="mt-3">
                <img src="{{ url('/frontend/images/img1.webp') }}" alt="" class="rounded float-left img-fluid mr-2" width="120px">
                  <h5>Recomendasi Laptop Untuk Ngoding</h5>
                </a>
              </div>
              <div class="card-body mb-3 body-card">
                <a href="" class="mt-3">
                <img src="{{ url('/frontend/images/img4.webp') }}" alt="" class="rounded float-left img-fluid mr-2" width="120px">
                  <h5>Keyboard Mechanical Untuk Ngoding</h5>
                </a>
              </div>
            </div>
            <div class="popular-artikel">
              <div class="card">
                <div class="card-body">
                  <h4>Popular Content</h4>
                </div>
                <div class="popular">
                  <div class="card-body mb-3">
                    <a href="" class="mt-3">
                    <img src="{{ url('/frontend/images/img1.webp') }}" alt="" class="rounded float-left img-fluid mr-2"
                        width="120px">
                      <h5>Lptop terbaik untuk ngoding</h5>
                    </a>
                  </div>
                  <div class="card-body mb-3">
                    <a href="" class="mb-3">
                    <img src="{{ url('/frontend/images/img4.webp') }}" alt="" class="rounded float-left img-fluid mr-2"
                        width="120px">
                      <h5>Keyboard terbaik untuk ngoding</h5>
                    </a>
                  </div>
                  <div class="card-body mb-5">
                    <a href="" class="mb-3 ">
                    <img src="{{ url('/frontend/images/img2.webp') }}" alt="" class="rounded float-left img-fluid mr-2"
                        width="120px">
                      <h5>Belajar dasar pemrograman</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="custom-shape-divider-bottom-1601287837">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path
          d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
          class="shape-fill"></path>
      </svg>
    </div>
    <div class="container tanya">
      <div class="contact-header justify-content-center text-center">
        <h3>Ada pertanyan ?</h3>
        <p>Silahkan tulis komentar anda</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
          <form>
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