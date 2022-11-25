<!-- sidebar -->
<nav id="sidebar">
    <!-- sidebar toogle button -->
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <!-- sidebar content -->
    <div class="components h-100">
        <ul class="list-unstyled mb-5 h-100">
            <!-- sidebar header, fixed -->
            <div class="sidebar-header p-4">
                <h1 class="text-center logo">
                    <span class="badge" style="background-color: #0838B0 !important; color: #fff">HMTE</span> Data
                    Center
                </h1>
                <!-- profile pict and name -->
                <div class="ps-3">
                    <a href="#exampleModal" class="p-2 position-relative" data-bs-toggle="modal">
                        <img src="/images/edna.jpg" alt="">
                        <span class="ms-3">
                            <?php $username = auth()->user()->name?>

                            @if(str_contains($username, 'Muhammad'))
                                M. {{ substr($username, 9, 20) }}
                                @if(strlen(substr($username, 9, 25))>=15)
                                    ...
                                @endif
                            @else
                                {{ substr($username, 0, 15) }}
                                @if(strlen(substr($username, 0, 15))>=15)
                                    ...
                                @endif
                            @endif
                        </span>
                        <span class="fa-sharp fa-solid fa-gear profile-setting-icon position-absolute top-50 end-0 translate-middle-y"></span>
                    </a>
                </div>

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
