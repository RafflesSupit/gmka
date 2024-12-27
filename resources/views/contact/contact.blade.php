<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}"/>
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
                <div class="menu active">
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

    <section class="sejarah">
        <div class="contact">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="#" target="blank"><img src="call.png" alt="">0298-592085</a></li>
                <hr>
                <li><a href="mailto:sekgmka@yahoo.co.id" target="blank"><img src="email.png" alt="">sekgmka@yahoo.co.id</a></li>
                <hr>
                <li><a href="https://www.facebook.com/gua.maria.kerep" target="blank"><img src="facebook.png" alt="">Facebook</a></li>
                <hr>
                <li><a href="https://www.instagram.com/gua.maria.kerep/" target="blank"><img src="instagram.png" alt="">Instagram</a></li>
                <hr>
                <li><a href="https://x.com/GuaKerep" target="blank"><img src="twitter.png" alt="">Twitter</a></li>
            </ul>
        </div>
    </section>

    <section class="location">
        <div class="container">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8836602287656!2d110.39679877437807!3d-7.25407967126128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70810ae24110f9%3A0x66bb91a8c7e99ee9!2sGua%20Maria%20Kerep%20Ambarawa!5e0!3m2!1sid!2sid!4v1714346946461!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps" title="maps"></iframe></p>
                <div class="container2">
                <h3>Lokasi Kami</h3>
                <p>Jl. Tentara Pelajar, Kerep, Kelurahan Panjang, Kecamatan Ambarawa, Kabupaten Semarang, Indonesia.</p>
                <button class="contact-button">CONTACT US</button>
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
    <script src="{{ asset('js/about.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

