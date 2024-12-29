<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/adminacara.css') }}"/>
    <link rel="shortcut icon" href="{{asset('img/img/favicon.png')}}" type="image/x-icon">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <title>Edit Acara</title>
</head>
<body>
    <section id="sidebar">
        <a href="#" class="brand">AdminGMKA</a>
        <ul class="side-menu">
            <li><a href="{{url('/admin/panel')}}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="#"><i class='bx bxs-inbox icon'></i> Controll <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="{{ url('/admin/adminacara') }}">Acara</a></li>
                    <li><a href="{{ url('/admin/adminberita') }}">Berita</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-notepad icon'></i> Upload <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="{{ url('/acara/create') }}">Upload Acara</a></li>
                    <li><a href="{{ url('/berita/create') }}">Upload Berita</a></li>
                </ul>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <span class="divider"></span>
            <div class="profile">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                <ul class="profile-link">
                    <li><a href="{{ route('dashboard') }}"><i class='bx bxs-log-out-circle' style="font-size: 26px;"></i> <p>Logout</p></a></li>
                </ul>
            </div>
        </nav>

        <main>
            <h1 class="title">Edit Acara</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Upload Acara</a></li>
            </ul>
            <div class="data">
                        
                @if (session('success'))
                    <div class="success-message">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.acara.update', $acara->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul Acara:</label>
                        <input type="text" id="judul" name="judul" value="{{ $acara->judul }}">
                        @error('judul')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Acara:</label>
                        <input type="text" id="kategori" name="kategori" value="{{ $acara->kategori }}">
                        @error('kategori')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="konten">Konten:</label>
                        <textarea id="konten" name="konten" rows="15">{!! $acara->konten !!}</textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#konten'))
                                .then(konten => {
                                    console.log('Konten was initialized', konten);
                                })
                                .catch(error => {
                                    console.error('There was an error initializing the Konten', error);
                                });
                        </script>
                        @error('konten')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group file-upload">
                        <label for="gambar">Upload Gambar:</label>
                        <input type="file" id="gambar" name="gambar">
                        @error('gambar')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-actions">
                        <button type="reset" class="cancel-button">Cancel</button>
                        <button type="submit" class="confirm-button">Update</button>
                    </div>
                </form>

    
            </div>
        </main>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/admin_panel.js') }}"></script>
</body>
</html>
