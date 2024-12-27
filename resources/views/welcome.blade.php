<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="{{asset('img/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <main class="main">

         <div class="home2">
            <div class="home-box">
                  <nav>
                     <div class="logo bars">
                        <div class="bar">
                            <i class="fa fa-bars"></i>
                        </div>
                        <h3>GMKA</h3>
                     </div>
                     <div class="menu">
                        <div class="close">
                            <i class="fa fa-close"></i>
                        </div>
                        <ul>
                              <li><a href="{{url('/')}}">home</a></li>
                              <li class="navbar-item">
                                 <div class="con2">
                                    <div class="profile-dropdown navbar-item">
                                          <a>news</a>
                                          <div class="profile-dropdown-content">
                                             <a href="{{url('/acara/view')}}"><p>Acara</p></a>
                                             <a href="{{url('/berita/view')}}"><p>Berita</p></a>
                                          </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="{{url('/contact')}}">contact</a></li>
                              <li><a href="{{url('/fasilitas/fasilitas')}}">fasilitas</a></li>
                              <li><a href="{{url('/about')}}">about GMKA</a></li>
                              {{-- <li><a href="{{url('/docs')}}">Documentation</a></li> --}}
                        </ul>
                     </div>
                    <a href="{{ route('login') }}">
                        <i class="fa fa-user-circle" style="font-size:24px; color:white;"></i>
                    </a>
                     
                  </nav>

                  <div class="content">
                    <h4>GMKA</h4>
                    <h1>GOA MARIA KEREP AMBARAWA</h1>
                    <p>Temukan ketenangan dalam jiwa, ciptakan momen spiritual yang menggugah hati, dan jalani perjalanan dengan penuh keimanan</p>
                  </div>
            </div>
                  
         </div>
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Kegiatan <br>
                        Goa Maria Kerep Ambarawa
                    </h1>

                    <p class="home__description">
                        Temukan kedamaian dan kebaikan di
                        Goa Maria Kerep Ambarawa.
                        Mari merasakan ketenangan jiwa dan kekuatan doa di
                        lokasi yang sakral dan indah ini.
                    </p>
                </div>

                <div class="home__images">
                    <div class="home__swiper swiper">
                        <div class="swiper-wrapper">
                            <article class="home__article swiper-slide">
                                <img src="{{ asset('img/gereja2.jpg') }}" alt="" class="home__img shadow-left">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="{{ asset('img/gereja2.jpg') }}" alt="" class="home__img shadow-left">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="{{ asset('img/gereja2.jpg') }}" alt="" class="home__img shadow-left">
                            </article>

                            <article class="home__article swiper-slide">
                                <img src="{{ asset('img/gereja2.jpg') }}" alt="" class="home__img shadow-left">
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section">
            <div class="services__container container grid">
                  <article class="services__card">
                     <a href="{{url('/about')}}"><img src="img/visi.png" alt=""></a>
                     <h3 class="services__title">VISI MISI</h3>
                     <p class="services__description">GMKA</p>
                  </article>

                  <article class="services__card">
                     <a href="{{url('/about')}}"><img src="img/history.png" alt=""></a>
                     <h3 class="services__title">SEJARAH</h3>
                     <p class="services__description">GMKA</p>
                  </article>

                  <article class="services__card">
                        <a href="{{url('/about')}}"><img src="img/pray.png" alt=""></a>
                        <h3 class="services__title">Perayaan Novena</h3>
                        <p class="services__description">GMKA</p>
                  </article>
            </div>
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class="section__title">
                Berita Terkini
            </h2>

            <div class="featured__container container">
                <div class="featured__swiper swiper">
                    <div class="swiper-wrapper">
                        @foreach ($beritas as $berita)
                        <article class="featured__card swiper-slide">
                            <a href="{{route('berita.show', $berita->id)}}">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="gambar berita" class="featured__img">
                            </a>
                            <h2 class="featured__title">{{ $berita->judul }}</h2>
                            <div class="featured__price">
                                <p class="featured__price">{!! Str::limit($berita->konten, 15, '...') !!}</p>
                                @if ($berita->created_at)
                                    <p class="featured__pricee">{{ $berita->created_at->format('d M Y') }}</p>
                                @else
                                    <p class="featured__pricee">Tanggal tidak tersedia</p>
                                @endif
                            </div>
                            
                        </article>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="centered__btn">
                        <a href="{{route('berita.view')}}" class="centered__btn">
                        <button class="btn-70">View All</button>
                        </a>
                    </div>
                </div>
            </div>
            
        </section>

        <!--==================== DISCOUNT ====================-->
        <section class="discount section" id="discount">
            <div class="discount__container container grid">
                <div class="discount__data">
                    <h2 class="discount__title section__title">
                        Fasilitas GMKA
                    </h2>
                    <p class="discount__description">
                        Nikmati berbagai fasilitas istimewa
                        dan manfaatkan penawaran menarik semakin
                        banyak yang tersedia di Gua Maria Kerep Ambarawa.
                    </p>
                    <a href="{{route('fasilitas.fasilitas')}}" class="button">Pelajari Lebih Lanjut</a>
                </div>

                <div class="discount__images">
                    <img src="{{ asset('img/img1.jpg') }}" alt="Discount Book" class="discount__img-1">
                    <img src="{{ asset('img/img1.jpg') }}" alt="Discount Book" class="discount__img-2">
                </div>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section" id="testimonial">
            
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>LOGO</h3>
                <a>Jl. Tentara Pelajar, Kerep, Kelurahan Panjang, Kecamatan Ambarawa, Kabupaten Semarang, Indonesia.</a>
            </div>
    
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 0298-592085</a>
                <a href="#"><i class="fas fa-envelope"></i> Email : sekgmka@yahoo.co.id</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.facebook.com/gua.maria.kerep/?paipv=0&eav=AfbNwzDckruvtkCnaQoRmzJRVa8ZvCuMzIzYmGygVgOyZv5I6cnj_a1YTJVzEdALM2E&_rdr"> <i class="fab fa-facebook"></i>Facebook</a>
                <a href="https://www.instagram.com/gua.maria.kerep"> <i class="fab fa-instagram"></i>Instagram</a>
                <a href="https://www.youtube.com/@GuaMariaKerepAmbarawaOfficial"> <i class="fab fa-youtube"></i>Youtube</a>
                <a href="https://www.tiktok.com/@gua.maria.kerep?is_from_webapp=1&sender_device=pc"> <i class="fab fa-tiktok"></i>Tiktok</a>
            </div>
    
        </div>
    
        <div class="credit">
            created by <span>Gua Maria Kerep Ambarawa - 2024</span>
        </div>
    </section>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
