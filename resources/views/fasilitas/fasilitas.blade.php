<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
    <link rel="stylesheet" href="{{ asset('css/faci.css') }}"/>
    <link rel="shortcut icon" href="{{asset('img/img/favicon.png')}}" type="image/x-icon">
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
                        <li><a href="{{url('/about')}}">about GMKA</a></li>
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

    <section id="facilities">
        <h1>Fasilitas GMKA</h1>
        <div class="facility-list">
            <div class="facility">
                <img src="{{asset('img/gereja3.jpg')}}" alt="Penginapan" class="imgfaci">
                <div class="facility-content">
                    <h3>Penginapan</h3>
                    <p>Explore the spectacular views of the resort, and find countless photo spots along the way. Please contact our Health Club for the availability.</p>
                </div>
            </div>
            <div class="facility">
                <img src="{{asset('img/gereja3.jpg')}}" alt="camping" class="imgfaci">
                <div class="facility-content">
                    <h3>Camping Ground</h3>
                    <p>Start your day with an invigorating jog and enjoy the spectacular view of our 2.5 hectares resort. You can start at any point of the resort and follow the circular track.</p>
                </div>
            </div>
            <div class="facility">
                <img src="{{asset('img/gereja3.jpg')}}" alt="Area Parkir" class="imgfaci">
                <div class="facility-content">
                    <h3>Area Parkir Luas</h3>
                    <p>Explore the spectacular views of the resort, and find countless photo spots along the way. Please contact our Health Club for the availability.</p>
                </div>
            </div>
            <div class="facility">
                <img src="{{asset('img/gereja3.jpg')}}" alt="Gedung Ibadah" class="imgfaci">
                <div class="facility-content">
                    <h3>Gedung Ibadah</h3>
                    <p>Start your day with an invigorating jog and enjoy the spectacular view of our 2.5 hectares resort. You can start at any point of the resort and follow the circular track.</p>
                </div>
            </div>
            
        </div>
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
    <script src="{{ asset('js/faci.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
