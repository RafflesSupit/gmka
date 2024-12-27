<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="{{ asset('css/docs.css')}} ">
</head>
<body>
    <div class="main-container">
        <aside class="sidebar">
            <div class="logo"><a href="{{ auth()->check() ? url('/dashboard') : url('/') }}">GMKA</a></div>
            <nav>
                <ul>
                    <li>
                        <form action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search..." id="searchInput">
                            <i class='bx bx-search icon'></i>
                        </div>
                        </form>
                    </li>
                    <li><a href="#introduction" class="nav-link">Introduction</a></li>
                    <li>
                        <a href="" class="nav-link">News</a>
                        <ul class="submenu">
                            <li><a href="#berita" class="nav-link">Berita</a></li>
                            <li><a href="#acara" class="nav-link">Acara</a></li>
                        </ul>
                    </li>
                    <li><a href="#faq" class="nav-link">FAQ</a></li>
                    <li><a href="#messages" class="nav-link">Forum Chat</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <section id="introduction" class="content-section active">
                <h2>Introduction</h2>
                <p>Goa Maria Kerep Ambarawa adalah sebuah situs suci yang terletak di Ambarawa, Jawa Tengah, Indonesia. Situs ini merupakan destinasi ziarah populer bagi umat Katolik di Indonesia. Sebuah website yang didedikasikan untuk Goa Maria Kerep Ambarawa akan menyediakan informasi tentang sejarah dan asal-usul situs tersebut, fasilitas yang tersedia di sekitar area, jadwal misa dan acara keagamaan, serta informasi praktis lainnya seperti panduan perjalanan, akomodasi terdekat, dan cara mencapai tempat tersebut.</p>
                <h2>Sejarah GMKA</h2>
                <p>Goa Maria Kerep Ambarawa, sebuah situs suci yang terletak di Ambarawa, Jawa Tengah, Indonesia, memiliki sejarah yang kaya dan penuh makna bagi umat Katolik Indonesia. Laman web ini adalah gambaran singkat tentang asal-usul dan perkembangan tempat ibadah ini. Dokumentasi ini memberikan gambaran singkat tentang sejarah Goa Maria Kerep Ambarawa, menggambarkan perjalanan tempat ibadah ini dari goa alami yang sederhana menjadi salah satu destinasi ziarah yang penting di Jawa Tengah.</p>
                <h2>Visi Misi GMKA</h2>
                <p>Goa Maria Kerep Ambarawa memiliki visi dan misi yang bertujuan untuk menjaga dan memperkuat peran tempat suci ini sebagai pusat kegiatan keagamaan dan spiritualitas Katolik, serta sebagai destinasi ziarah yang berarti bagi umat Katolik Indonesia. Dokumentasi ini memberikan gambaran tentang visi dan misi yang diemban oleh Goa Maria Kerep Ambarawa, menunjukkan komitmen tempat suci ini dalam memenuhi kebutuhan spiritual umat Katolik dan masyarakat luas.</p>
            </section>
            <section id="berita" class="content-section">
                <h2>News</h2>
                <p>Dokumentasi ini bertujuan untuk memberikan panduan langkah demi langkah tentang bagaimana cara mengunggah berita baru ke dalam platform website Goa Maria Kerep Ambarawa. Mulai dari masuk ke panel administrasi hingga publikasi berita, langkah-langkah yang disajikan di sini akan membantu para pengelola website untuk menjaga situs ini tetap informatif dan relevan.</p>
                <h2>Bagaimana Cara Upload Berita</h2>
                <p>1. Masuk ke Panel Administrasi Website:
                    <ul>
                        <li>Buka browser web dan akses panel administrasi website Goa Maria Kerep Ambarawa dengan menggunakan akun yang memiliki izin administratif.</li>
                    </ul>
                </p>
                <p>2. Navigasi ke Bagian Berita:
                    <ul>
                        <li>Cari opsi atau menu berita.</li>
                        <li>Pilih "Upload Berita".</li>
                    </ul>
                </p>
                <p>3. Isi Informasi Berita:
                    <ul>
                        <li>Di dalam formulir pembuatan posting baru, Anda akan menemukan bidang untuk mengisi judul berita, tanggal terbit, dan konten berita itu sendiri.</li>
                        <li>Anda juga dapat menyertakan gambar yang relevan jika diperlukan.</li>
                    </ul>
                </p>
                <p>4. Periksa dan Kirimkan Berita:
                    <ul>
                        <li>Setelah berita dipublikasikan, periksa kembali untuk memastikan bahwa semuanya terlihat dengan baik dan tidak ada kesalahan.</li>
                    </ul>
                </p>
                <h2>Bagaimana Cara Sunting Berita</h2>
                <p>1. Masuk ke Panel Administrasi Website:
                    <ul>
                        <li>Buka browser web dan akses panel administrasi website Goa Maria Kerep Ambarawa dengan menggunakan akun yang memiliki izin administratif.</li>
                    </ul>
                </p>
                <p>2. Temukan Berita yang Akan Disunting:
                    <ul>
                        <li>Cari berita yang ingin Anda sunting dalam daftar posting yang tersedia.</li>
                    </ul>
                </p>
                <p>3. Masuk ke Halaman Sunting:
                    <ul>
                        <li>Setelah menemukan berita yang akan disunting, klik atau tap pada tombol edit untuk membukanya dalam mode pengeditan.</li>
                    </ul>
                </p>
                <p>4. Lakukan Penyuntingan Berita
                    <ul>
                        <li>Sunting judul berita jika perlu untuk membuatnya lebih deskriptif atau menarik.</li>
                        <li>Periksa konten berita secara menyeluruh. Pastikan informasi yang disajikan tetap akurat dan relevan.</li>
                        <li>Jika diperlukan, tambahkan atau hapus bagian konten untuk memperbaiki kelengkapan atau keterbacaan berita.</li>
                    </ul>
                </p>
                <p>5. Publikasikan Kembali
                    <ul>
                        <li>Setelah selesai menyunting berita, klik tombol “Confirm” untuk menyimpan perubahan dan mempublikasikan berita yang telah disunting.</li>
                    </ul>
                </p>
            </section>
            <section id="acara" class="content-section">
                <h2>News</h2>
                <p>Dokumentasi ini bertujuan untuk memberikan panduan langkah demi langkah tentang bagaimana cara mengunggah berita baru ke dalam platform website Goa Maria Kerep Ambarawa. Mulai dari masuk ke panel administrasi hingga publikasi berita, langkah-langkah yang disajikan di sini akan membantu para pengelola website untuk menjaga situs ini tetap informatif dan relevan.</p>
                <h2>Bagaimana Cara Upload Acara</h2>
                <p>1. Masuk ke Panel Administrasi Website:
                    <ul>
                        <li>Buka browser web dan akses panel administrasi website Goa Maria Kerep Ambarawa dengan menggunakan akun yang memiliki izin administratif.</li>
                    </ul>
                </p>
                <p>2. Navigasi ke Bagian Acara:
                    <ul>
                        <li>Cari opsi atau menu Acara.</li>
                        <li>Pilih "Upload Acara".</li>
                    </ul>
                </p>
                <p>3. Isi Informasi Acara:
                    <ul>
                        <li>Di dalam formulir pembuatan posting baru, Anda akan menemukan bidang untuk mengisi judul acara, tanggal terbit, dan konten acara itu sendiri.</li>
                        <li>Anda juga dapat menyertakan gambar yang relevan jika diperlukan.</li>
                    </ul>
                </p>
                <p>4. Periksa dan Kirimkan Acara:
                    <ul>
                        <li>Setelah acara dipublikasikan, periksa kembali untuk memastikan bahwa semuanya terlihat dengan baik dan tidak ada kesalahan.</li>
                    </ul>
                </p>
                <h2>Bagaimana Cara Sunting Acara</h2>
                <p>1. Masuk ke Panel Administrasi Website:
                    <ul>
                        <li>Buka browser web dan akses panel administrasi website Goa Maria Kerep Ambarawa dengan menggunakan akun yang memiliki izin administratif.</li>
                    </ul>
                </p>
                <p>2. Temukan acara yang Akan Disunting:
                    <ul>
                        <li>Cari acara yang ingin Anda sunting dalam daftar posting yang tersedia.</li>
                    </ul>
                </p>
                <p>3. Masuk ke Halaman Sunting:
                    <ul>
                        <li>Setelah menemukan acara yang akan disunting, klik atau tap pada tombol edit untuk membukanya dalam mode pengeditan.</li>
                    </ul>
                </p>
                <p>4. Lakukan Penyuntingan Acara
                    <ul>
                        <li>Sunting judul acara jika perlu untuk membuatnya lebih deskriptif atau menarik.</li>
                        <li>Periksa konten acara secara menyeluruh. Pastikan informasi yang disajikan tetap akurat dan relevan.</li>
                        <li>Jika diperlukan, tambahkan atau hapus bagian konten untuk memperbaiki kelengkapan atau keterbacaan acara.</li>
                    </ul>
                </p>
                <p>5. Publikasikan Kembali
                    <ul>
                        <li>Setelah selesai menyunting acara, klik tombol “Confirm” untuk menyimpan perubahan dan mempublikasikan acara yang telah disunting.</li>
                    </ul>
                </p>
            </section>
            <section id="faq" class="content-section">
                <div class="container">
                    <h1>Frequently Ask Question</h1>
                    <div class="faq-item">
                        <div class="faq-question">+ Apa yang bisa saya temukan di website Goa Maria Kerep Ambarawa?</div>
                        <div class="faq-answer">
                            <p>Website ini menyediakan informasi mengenai sejarah dan asal-usul Goa Maria Kerep Ambarawa, fasilitas yang tersedia di sekitar area, jadwal misa dan acara keagamaan, serta informasi praktis lainnya seperti panduan perjalanan, akomodasi terdekat, dan cara mencapai tempat tersebut.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">+ Bagaimana cara mengunggah berita atau informasi terbaru di website ini?</div>
                        <div class="faq-answer visi-misi">
                            <p>Anda dapat mengakses panel administrasi website Goa Maria Kerep Ambarawa menggunakan akun yang memiliki izin administratif. Setelah masuk, navigasi ke bagian berita, pilih "Upload Berita", dan isi informasi yang dibutuhkan seperti judul berita, tanggal terbit, dan konten berita.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">+ Apakah ada acara-acara khusus yang diadakan di Goa Maria Kerep Ambarawa?</div>
                        <div class="faq-answer visi-misi">
                            <p>Ya, informasi mengenai acara-acara keagamaan dan kegiatan lainnya dapat ditemukan di bagian acara dari website ini.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">+ Apakah ada fasilitas yang tersedia di sekitar Goa Maria Kerep Ambarawa?</div>
                        <div class="faq-answer visi-misi">
                            <p>Informasi mengenai fasilitas yang tersedia di sekitar area Goa Maria Kerep Ambarawa juga dapat ditemukan di website ini, membantu pengunjung untuk merencanakan kunjungan dengan lebih baik.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">+ Bagaimana saya bisa berkontribusi atau mendukung Goa Maria Kerep Ambarawa?</div>
                        <div class="faq-answer visi-misi">
                            <p>Kami menyambut sumbangan dalam bentuk doa, kerjasama dalam acara keagamaan, dan dukungan finansial untuk pemeliharaan situs dan pengembangan fasilitas. Silakan hubungi kami untuk informasi lebih lanjut.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">+ Bagaimana cara mengajukan permohonan peminjaman fasilitas?</div>
                        <div class="faq-answer visi-misi">
                            <p>Untuk mengajukan permohonan peminjaman fasilitas, silakan menghubungi kami melalui formulir yang tersedia di bagian kontak atau mengirimkan email ke alamat yang tercantum. Pastikan untuk menyertakan informasi detail mengenai jenis acara, tanggal, waktu, jumlah peserta, dan jenis fasilitas yang Anda perlukan.</p>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section id="messages" class="content-section">
                <div class="chat-container" id="chat-container">
                    @foreach($messages as $message)
                        <div class="chat-message {{ $message->user->role == 'admin' ? 'admin-message' : '' }}">
                            <img src="{{ $message->user->profile_photo_url }}" alt="{{ $message->user->name }}">
                            <div class="message-content">{{ $message->content }}</div>
                            <div class="message-info">
                                <div class="timestamp">
                                    <span class="role">{{ $message->user->role }}</span>
                                    <span>{{ $message->created_at->format('h:i a') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="message-input">
                    @auth
                        <form action="{{ route('messages.store') }}" method="POST">
                            @csrf
                            <input type="text" name="content" id="message-input" placeholder="Write a message...">
                            <button type="submit" id="send-button">Send</button>
                        </form>
                    @else
                        <p>You need to <a href="/login">login</a> to send a message.</p>
                    @endauth
                </div>
            </section>
        </main>
    </div>
    <script src="{{asset ('js/docs.js')}}"></script>
</body>
</html>
