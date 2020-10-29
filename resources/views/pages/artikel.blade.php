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
          <h1 class="artikel-blog">{{ $item->title }}
            <br>
          <span>{{ $item->title_content }}</span>
          </h1>
          <span class="penulis-header">Ditulis oleh <a href=""> {{ $item->writer }} </a>,{{$item->date_writer}}
            <br>
          <span class="kategory font-italic">Kategori {{ $item->category }}</span>
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
            <img src="{{ ($item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' ) }}" alt="" class="img-fluid mb-2">
          </div>
          <div class="penulis">
            <p>Ditulis oleh<a href=""> {{$item->writer}}  </a> Tangerang, {{$item->date_writer}}  </p>
          </div>
          <div class="isi-kontent">
          <p> {{ $item->content_title }}</p>
            <div class="img-thumb text-center mt-5">
              @foreach ($item->galleries as $key => $img)
                @if ($key !=0)   
                  <img src="{{ Storage::url($img->image) }}" class="w-75 mt-4 mb-3 rounded  img-fluid" alt="">
                @endif
              @endforeach
            </div>
          <h3 class="mt-3 mb-5">{{ $item->title }}</h3>
            {!! $item->content !!}
          </div>
        </div>
        <div class="col-lg-4">
          <div class="container">
            <div class="card card-penulis mb-4">
              <div class="card-body">
                <h5>Tentang Penulis</h5>
              <img src="{{ url('/frontend/images/2019-04-23 06.19.29 1.jpg') }}" alt=""
                  class="img-fluid float-left mt-2 mr-3 img-thumbnail rounded" width="130px">
              <p>{{ $item->about_writer }}</p>
              </div>
            </div>
            <div class="card artikel-terkait">
              <div class="card-body">
                <h4>Artikel Terkait</h4>
              </div>
                @foreach ($artikels as $artikel)
                  <div class="card-body body-card">
                  <a href="{{ url('artikel', $artikel->slug) }}" class="mb-2">
                    <img src="{{($artikel->galleries->count() ? Storage::url( $artikel->galleries->first()->image) : '' )}}" alt="" class="rounded float-left img-fluid mr-2" width="120px">
                    <h5>{{ $artikel->title }}</h5>
                    </a>
                  </div>
                @endforeach
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