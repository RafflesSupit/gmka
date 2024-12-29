<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}"/>
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
        <div class="container">
            <h1>Gua Maria Kerep Ambarawa</h1>
            <div class="faq-item">
                <div class="faq-question">+ Sejarah Gua Maria Kerep Ambarawa</div>
                <div class="faq-answer">
                    <p>Gua Maria Kerep Ambarawa (GMKA) merupakan salah satu gua Maria pertama di Indonesia yang lahir tanpa dasar penampakan. Gua ini didirikan pada tahun 1954 sebagai bakal dari sumbangan tanah dan rumah dari seorang warga Belanda yang bertugas di penjara dan bertempat di sekitar Ambarawa kepada Gereja, yang kemudian diserahkan kepada Kongregasi Bruder Para Rasul. Pembangunan gua ini terletak di areal dengan gua-gua sentral Se Jawa pada tahun yang sama, yang menetapkan tahun tersebut sebagai Tahun Maria dalam rangka penghormatan 100 tahun dogma “Maria Terkandung Tanpa Noda”. Mantan Direktur Kongregasi Bruder Apostolik, Romo Rendijsmans, atas saran episkop pastoran bernama Romo Bernardus Soegija Pr, berperan penting dalam mendorong perayaan penghormatan kepada Bunda Maria dan ide pembangunan Gua Maria ini. Gua Maria Kerep Ambarawa kemudian direalisasikan pada tahun 1954 dengan partisipasi siswa-siswi sekolah guru yang tinggal di Asrama Bruderan dan Susteran Ambarawa dalam mengumpulkan batu dari sungai Panjang.</p>
                    <p>Gua Maria Kerep Ambarawa (GMKA) memiliki asal mula yang menarik. Awalnya, para Bruder Apostolik sering melakukan ziarah ke Sendang Sriningsih, Kulon, setiap bulan Mei dan Oktober. Pada bulan Mei 1954, Romo Koersen SJ memberi kejutan kepada mereka, mengumumkan bahwa mereka tidak perlu lagi melakukan perjalanan jauh untuk berziarah. Dia menunjukan ada tempat ziarah yang dekat, dan pada hari Minggu berikutnya, Romo Koersen SJ datang dengan Romo Kester SJ untuk menunjukkan lokasinya.</p>
                    <p>Saat itu, Romo Kester secara tiba-tiba menunjuk suatu tempat dan mengatakan bahwa di situah Gua Maria akan dibangun. Bruder Benschman segera membuat salib dari sebatang bambu dan menancapkannya di tempat yang ditunjuk oleh Romo Koester. Pada sore hari yang sama, rombongan Suster Fransiskanes dari Ambarawa datang, dan mereka langsung menyanyikan Ave Maria diatas Patok di tempat yang sama.</p>
                    <p>Proses pembangunan GMKA dimulai sekitar bulan Mei 1954, dan berlangsung selama lebih dari satu tahun. Para siswa Sekolah Guru Kolese Santo Yusuf, Sekolah Guru Putri Santa Maria dan serta anak-anak dari Bruderan dan Susteran ambil bagian dalam mengumpulkan batu dari Sungai Panjang. Material dibantu oleh berbagai tokoh, termasuk umat Katolik dan dibiayai oleh para romo dan donatur. Gua Maria selesai pada tanggal 25 Juli 1954, dan pada tanggal 15 Agustus 1954, Gua Maria Kerep Ambarawa diberkati dan diresmikan oleh Uskup Agung Semarang Mgr Albertus Soegijapranata SJ.</p>
                    <p>Gua Maria Kerep Ambarawa dibangun dengan menggunakan tumpukan batu kali yang diikat dengan semen, pasir, dan kapur. Bentuknya menyerupai gua buatan dan menghadap ke Timur. Patung Bunda Maria yang ada di dalam gua diberkati dengan air dari Gua Lourdes, menunjukan bahwa untuk meritus kesakitan Gua Maria di Lourdes. Upacara peresmian dihadiri oleh banyak umat dan dipimpin oleh Mgr Albertus Soegijapranata SJ.</p>
                    <p>Pengembangan Gua Maria Kerep Ambarawa (GMKA) merupakan suatu proses yang meliputi beberapa tahapan, di mana salah satunya adalah renovasi gua itu sendiri.</p>
                    <p>Sejarah Gua Maria Kerep Ambarawa semakin terhubung dengan Gua Maria Lourdes melalui kisah mujizat yang dialami oleh seorang Katolik. Ibu Bedjo Ludiro, yang sembuh dari kelumpuhan setelah berziarah ke Gua Lourdes, Prancis. Sebagai ungkapan syukur atas kesembuhan tersebut, saudarinya, Lo Thiam Siang, memutuskan untuk merenovasi Gua Maria Kerep Ambarawa pada tahun 1981. Renovasi ini melibatkan perubahan struktur gua agar lebih menyerupai Gua Maria di Lourdes. Setelah selesai, renovasi ini diberkati oleh Bapak Kardinal Yustinus Darmoyuwono pada tanggal 4 Oktober 1981.</p>
                    <p>Selanjutnya, pada tahun 1992, dibentuklah Panitia Pengembangan Gua Maria Kerep Ambarawa yang bertugas untuk merawat, memperbaiki, dan mengembangkan bangunan kompleks GMKA agar lebih memadai. Renovasi tersebut meliputi pembangunan fasilitas pendukung untuk kegiatan rohani, seperti stasi-stasi Jalan Salib di antara pepohonan rindang.</p>
                    <p>Pada tahap kedua pengembangan, dilakukan pembangunan aula, gedung transit, dan ruang doa di kompleks GMKA. Pembangunan ini dipimpin oleh Tim Pengelola setempat dan Tim Pembangunan Gua Maria Kerep. Biaya pembangunan berasal dari dermawan dan kolekte misa, serta dari para peziarah yang bersyukur atas doa yang terkabul.</p>
                    <p>Pada tahap ketiga pengembangan, perhatian khusus diberikan pada penyediaan lahan parkir yang memadai. Sebelumnya, parkir kendaraan di sekitar Gua Maria Kerep Ambarawa menggunakan area seadanya, bahkan ada yang menggunakan lapangan desa, halaman sekolah, dan sebagian terminal bis Ambarawa. Situasi ini dianggap tidak ideal dan memerlukan penanganan serius.</p>
                    <p>Untuk mengatasi masalah ini, Tim Pengelola Gua Maria Kerep Ambarawa bersama Tim Teknik Perencana dari UNIKA Soegijapranata Semarang membentuk Tim Pelaksana Pembangunan Area Parkir Baru. Pembangunan ini dilakukan secara bertahap dan menghasilkan area parkir yang luas dan tertata dengan baik. Pada saat yang bersamaan, dibangun juga gedung pertemuan yang dikenal sebagai rumah kaca, yang memiliki dinding utama yang terbuat dari kaca. Gedung ini dilengkapi dengan fasilitas kamar mandi dan toilet di bagian belakang bangunan.</p>
                    <p>Sejalan dengan penetapan tahun 2000 sebagai Tahun Pemuda, juga dibangun camping ground di dekat area parkir untuk memfasilitasi kegiatan kaum muda. Di dalam area parkir dilengkapi pula beberapa kios pelayanan devotional dan kios-kios untuk pedagang kaki lima, serta gudang juga parkir dan sarana sanitasi. Pembangunan area parkir ini dimulai pada tanggal 5 Agustus 1999, dan selesai seluruhnya tepat pada tanggal 31 Juli 2000, area parkir dan fasilitas pendukungnya diresmikan oleh Uskup Agung Semarang Mgr Ignatius Suharyo.</p>
                    <p>Pengembangan ini merupakan langkah penting dalam memenuhi kebutuhan umat Katolik akan tempat ziarah yang memadai saat berkunjung ke Gua Maria Kerep Ambarawa, serta untuk meningkatkan kenyamanan dan fasilitas bagi para peziarah. Semua pembangunan ini dilakukan dengan dukungan dana dari berbagai sumber, termasuk dermawan dan hasil persembahan kolekte misa, serta dari para peziarah yang bersedia berkontribusi untuk pembangunan dan perawatan kompleks GMKA.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">+ Visi Misi Gua Maria Kerep Ambarawa</div>
                <div class="faq-answer visi-misi">
                    <h2>Visi</h2>
                    <p>Gua Maria Kerep Ambarawa menjadi tempat pilihan umat untuk bersama Bunda Maria berdoa kepada Bapa agar semakin mengenal, mencintai dan mengikuti Yesus Kristus.</p>
                    <h2>Misi</h2>
                    <ul>
                        <li><p>Menjadikan Gua Maria Kerep Ambarawa sebagai sarana devosi kepada Bunda Maria yang tenang dan damai.</p></li>
                        <li><p>Memberikan kenyamanan dan keamanan yang baik dengan dasar cinta kasih kepada seluruh peziarah.</p></li>
                        <li><p>Melestarikan dan mengembangkan tempat ziarah Gua Maria Kerep Ambarawa.</p></li>
                        <li><p>Membangun hubungan baik dengan masyarakat setempat dan memberikan pelayanan kasih.</p></li>
                    </ul>
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
    <script src="{{ asset('js/about.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
