<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/adminacara.css') }}"/>
    <link rel="shortcut icon" href="{{asset('img/img/favicon.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>AdminPanel</title>
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
                    <input type="text" placeholder="Search..." id="searchInput">
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
            <h1 class="title">Kelola Acara</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Kelola Acara</a></li>
            </ul>
            <div class="data">
                @foreach ($acaras as $acara)
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>{{ $acara->judul }}</h2>
                                <p>{!! Str::limit($acara->konten, 50, '...') !!}</p>
                            </div>
                            <div class="action-buttons">
                                <a href="{{ route('admin.acara.edit', $acara->id) }}" class="edit-button">Edit</a>
                                <form action="{{ route('adminacara.delete', $acara->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="delete-button" onclick="confirmDelete(this)">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/admin_panel.js') }}"></script>
</body>
</html>
