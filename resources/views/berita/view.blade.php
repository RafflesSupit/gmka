<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
    <link rel="shortcut icon" href="{{asset('img/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/view_berita.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <div class="home">
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
                        <li><a href="{{ Auth::check() ? route('dashboard') : url('/') }}">home</a></li>
                        <li>
                            <div class="con2">
                                <div class="profile-dropdown">
                                    <a href="">news</a>
                                    <div class="profile-dropdown-content">
                                        <a href="{{url('/acara/view')}}"><p>Acara</p></a>
                                        <a href="{{url('/berita/view')}}"><p>Berita</p></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{url('/contact')}}">contact</a></li>
                        <li><a href="{{url('/fasilitas/fasilitas')}}">fasilitas</a></li>
                        <li><a href=""{{url('/about')}}>about GMKA</a></li>
                        {{-- <li><a href="{{url('/docs')}}">Documentation</a></li> --}}
                        @if(isset($user) && $user->role === 'admin')
                            <li><a href="{{url('/admin/panel')}}">Admin Panel</a></li>
                        @endif
                    </ul>
                </div>
                @if (Auth::check())
                    <div class="profile-dropdown">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        <div class="profile-dropdown-content">
                            <form method="POST" action="{{ route('logout') }}" style="margin: 0; padding: 0;">
                                @csrf
                                <button type="submit" style="border: none; background: none; color: black; width: 100%; text-align: left; padding: 12px 16px;">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                <a href="{{ route('login') }}">
                    <i class="fa fa-user-circle" style="font-size:24px; color:white;"></i>
                </a>
                @endif
            </nav>

        </div>

            
    </div>

    <section class="berita">
        <h1>Berita GMKA</h1>
        <main>
            <section class="content">
                <div class="left-section">
                    <div class="main-story">
                        <a href="{{route('berita.show', $latestNews->id)}}">
                            <img src="{{ asset('storage/' . $latestNews->gambar) }}" alt="Gambar Berita Utama">
                            <div class="story-content">
                                <h2>{{ $latestNews->judul }}</h2>
                                <p>{!! Str::limit($latestNews->konten, 50, '...') !!}</p>
                                <time>{{ $latestNews->created_at->format('d M Y') }}</time>
                                <span>| Kategori {{$latestNews->kategori}}</span>
                            </div>
                        </a>
                    </div>
                    <div class="below-main">
                        @foreach ($belowNews as $berita)
                        <div class="story">
                            <a href="{{ route('berita.show', $berita->id)}}">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita">
                                <h3>{{ $berita->judul }}</h3>
                                <p>{!! Str::limit($berita->konten, 50, '...') !!}</p>
                                <time>{{ $berita->created_at->format('d M Y') }}</time>
                                <span>| Kategori {{$berita->kategori}}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="right-section">
                    @foreach ($rightNews as $berita)
                    <div class="story">
                        <a href="{{ route('berita.show', $berita->id)}}">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita">
                        </a>
                        <a href="{{ route('berita.show', $berita->id)}}">
                            <h3>{{ $berita->judul }}</h3>
                            <p>{!! Str::limit($berita->konten, 100, '...') !!}</p>
                            <time>{{ $berita->created_at->format('d M Y') }}</time>
                            <span>| Kategori {{$berita->kategori}}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
            <div class="pagination">
                {{ $beritas->links('vendor.pagination.tailwind') }}
            </div>
        </main>
    </section>

<!-- footer -->
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
            created by <span>Goa Maria Kerep Ambarawa - 2024</span>
        </div>

    </section>

    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/view_berita.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
