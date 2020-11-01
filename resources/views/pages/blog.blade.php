@extends('layouts.appBlog')

@section('title', 'Neutron Blog' )

@section('content')
        <!-- header -->
    <main class="header">
      <div class="bg-home"></div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-5 d-lg-block">
            <img src="/frontend/images/Wall post-bro.png" alt="" class="img-header-blog">
          </div>
          <div class="col-lg-8 col-md-7">
            <h1 class="text-header-blog text-center">Dengan
              membaca artikel ini kamu akan mendapatkan<br>
              <span class="typingBlog"></span>
            </h1>
          </div>
        </div>
      </div>
      <div class="custom-shape-divider-bottom-1601050511">
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
    <!-- about artikel -->
    <section class="artikel mt-5 mb-5">
      <div class="custom-shape-divider-top-1601104068">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
            d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
            class="shape-fill"></path>
        </svg>
      </div>
      <div class="container" id="articel">
        <div class="row ">
          <div class="col text-center">
            <div class="artikel-about">
              <h2> About Articel </h2>
              <p>This is my articel content</p>
            </div>
          </div>
        </div>
        <div class="row row-content-about justify-content-center text-center">
          <div class="col-12 col-lg-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ratione itaque consequatur. Corporis eius,
              dolore voluptatem maiores accusamus perferendis eveniet molestias non voluptatum illum pariatur neque
              dolorum quod ratione ipsam.</p>
          </div>
          <div class="col-12 col-lg-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum ratione itaque consequatur. Corporis eius,
              dolore voluptatem maiores accusamus perferendis eveniet molestias non voluptatum illum pariatur neque
              dolorum quod ratione ipsam. lorem</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-artikel-content pt-5">
      <div class="custom-shape-divider-bottom-1601279884">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"></path>
        </svg>
      </div>
      <div class="container">
        <div class="row mb-5 row-content justify-content-center">
          @foreach ($items as $item)
            <div class="col-12 col-lg-4">
              <a href="{{ url('artikel', $item->slug) }}" class="card card-blog mb-5">
                <img src="{{($item->galleries->count() ? Storage::url( $item->galleries->first()->image) : '' )}}" alt="" width="100%" class="mb-2">
                  <div class="card-body ml-3 pt-0">
                  <h3 class="card-title text-dark">{{ $item->title }}</h3>
                  <p class="card-text text-black-50">{!! $item->content !!}</p>
                  </div>
                  <div class="row text-dark">
                    <div class="col-lg-7">
                      <i class="far fa-user float-left mr-2 mt-3"></i>
                    <p class="mt-2">{{ $item->writer }}</p>
                    </div>
                    <div class="col-lg-5 ">
                      <i class="fas fa-tags float-left mr-2 mt-3"></i>
                    <p class="mt-2">{{ $item->category }}</p>
                    </div>
                  </div>
              </a>
            </div>
            @endforeach
            <div class=" fa-pull-right mt-4 d-flex col-lg-12 justify-content-center">
              {{-- pagination-costom --}}
              @if ($items->hasPages())
                <ul class="pagination" role="navigation">
                    {{-- Previous Page Link --}}
                    @if ($items->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $items->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif
             
                    <?php
                        $start = $items->currentPage() - 1; // show 3 pagination links before current
                        $end = $items->currentPage() + 1; // show 3 pagination links after current
                        if($start < 1) {
                            $start = 1; // reset start to 1
                            $end += 1;
                        } 
                        if($end >= $items->lastPage() ) $end = $items->lastPage(); // reset end to last page
                    ?>
             
                    @if($start > 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ $items->url(1) }}">{{1}}</a>
                        </li>
                        @if($items->currentPage() != 4)
                            {{-- "Three Dots" Separator --}}
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        @endif
                    @endif
                        @for ($i = $start; $i <= $end; $i++)
                            <li class="page-item {{ ($items->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $items->url($i) }}">{{$i}}</a>
                            </li>
                        @endfor
                    @if($end < $items->lastPage())
                        @if($items->currentPage() + 3 != $items->lastPage())
                            {{-- "Three Dots" Separator --}}
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        @endif
                        <li class="page-item">
                            <a class="page-link" href="{{ $items->url($items->lastPage()) }}">{{$items->lastPage()}}</a>
                        </li>
                    @endif
             
                    {{-- Next Page Link --}}
                    @if ($items->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $items->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
              @endif
            </div>
        </div>
    </section>
@endsection

@push('addon-script')
  <script src="/frontend/scripts/typingBlog.js"></script>
@endpush