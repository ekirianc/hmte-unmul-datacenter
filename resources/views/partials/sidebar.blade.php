<!-- sidebar -->
<nav id="sidebar">
    <!-- sidebar content -->
    <div class="components h-100">
        <ul class="list-unstyled mb-5 h-100">
            <!-- sidebar header, fixed -->
            <div class="sidebar-header p-3">
                <h1 class="text-center logo m-0">
                    <span class="badge" style="background-color: #0838B0 !important; color: #fff">HMTE</span> Data
                    Center
                </h1>
            </div>
            <!-- sidebar list -->
            <div class="sidebar-list p-3 pt-4">
                <!-- Dashboard -->
                <li class="{{ Request::path() === '/' ? 'active':'' }}">
                    <a href="/" class="fw-semibold">
                        <span class="ic-dashboard mr-3"></span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#perpustakaanSubmenu" class="dropdown-toggle fw-semibold" aria-expanded="false"
                       data-bs-toggle="collapse">
                        <span class="ic-perpus mr-3"></span> Perpustakaan</a>
                    <ul class="collapse list-unstyled" id="perpustakaanSubmenu">
                        <li class="{{ Request::path() === 'materi' ? 'active':'' }}"><a href="/materi">Materi Pembelajaran</a></li>
                        <li class="{{ Request::path() === 'ebook' ? 'active':'' }}"><a href="/ebook">Ebook</a></li>
                        <li class=""><a href="#">Aplikasi</a></li>
                    </ul>
                </li>
                <!-- Kuliah -->
                <li>
                    <a href="#kuliahSubmenu" class="dropdown-toggle fw-semibold" aria-expanded="false"
                       data-bs-toggle="collapse">
                        <span class="ic-kuliah mr-3"></span> Kuliah
                    </a>
                    <ul class="collapse list-unstyled" id="kuliahSubmenu">
                        <li class="{{ Request::path() === 'kurikulum' ? 'active':'' }}"><a href="/kurikulum">Kurikulum</a></li>
                        <li class="{{ Request::path() === 'jadwal' ? 'active':'' }}"><a href="/jadwal">Jadwal Kuliah</a></li>
                    </ul>
                </li>
                <!-- Informasi -->
                <li>
                    <a href="#infoSubmenu" class="dropdown-toggle fw-semibold" aria-expanded="false"
                       data-bs-toggle="collapse">
                        <span class="ic-info mr-3"></span> Informasi
                    </a>
                    <ul class="collapse list-unstyled" id="infoSubmenu">
                        <li><a href="#">Mahasiswa</a></li>
                        <li><a href="#">Dosen</a></li>
                        <li><a href="#">KKN</a></li>
                        <li><a href="#">PKL</a></li>
                        <li><a href="#">Skripsi</a></li>
                    </ul>
                </li>
                <!-- Himpunan -->
                <li>
                    <a href="#humpunanSubmenu" class="dropdown-toggle fw-semibold" aria-expanded="false"
                       data-bs-toggle="collapse">
                        <span class="ic-himpunan mr-3"></span> Himpunan
                    </a>
                    <ul class="collapse list-unstyled" id="humpunanSubmenu">
                        <li><a href="#">Informasi</a></li>
                        <li><a href="#">Pengurus</a></li>
                        <li><a href="#">Program Kerja</a></li>
                        <li><a href="#">Aktivitas</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </div>
</nav>

@include('partials.modal_profile_settings')
