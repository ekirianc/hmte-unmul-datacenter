{{---------------------------------
              Materi Section
    ---------------------------------}}
<div class="mb-4 ">
    <!--judul, pilihan semester-->
    <div class="header materi-header d-sm-flex flex-wrap  p-3 px-4">
        <button type="button" class="btn bg-transparent mr-3"
                data-bs-toggle="collapse" data-bs-target="#collapseMateri" aria-expanded="false">
            <i class="bi bi-caret-down-fill"></i>
        </button>
        <h3 class="mb-0 mr-3 fw-semibold text-dark-grey">Materi</h3>
        <!-- semester selector button -->
        <button class="btn dropdown dropdown-toggle dropdown-center mr-3 ms-auto" type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
            Semester {{request('semester')}}
        </button>
        @include('partials.semester_list')

        <button class="btn dropdown dropdown-toggle dropdown-center" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
            Pengolahan Citra Digital
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Interaksi Manusia dan Komputer</a></li>
            <li><a class="dropdown-item" href="#">Komputer Vision</a></li>
            <li><a class="dropdown-item" href="#">Sistem Keamanan</a></li>
            <li><a class="dropdown-item" href="#">Pemrograman Mobile</a></li>
            <li><a class="dropdown-item" href="#">Sistem Operasi</a></li>
        </ul>
    </div> <!--header-->

    <!--Content Materi-->
    <div class="collapse show" id="collapseMateri">
        <div class="content-materi dashboard px-4 pt-3">
            <div class="row">
                @include('dashboard.content.content_materi')
            </div>
        </div>
    </div>

</div><!--Materi section -->