<!--Materi Section-->
<div class="mb-5">
    <!--judul, pilihan semester-->
    <div class="d-sm-flex flex-wrap header p-1">
        <h3 class="mb-0 mr-3 fw-semibold title-color">Materi</h3>
        <!-- semester selector button -->
        <button class="btn dropdown dropdown-toggle dropdown-center" type="button" data-bs-toggle="dropdown"
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
    <div class="content-materi">
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between p-0">
                <p class="mb-0 p-3">Pertemuan 1.ppt</p>
                <p class="ms-auto mb-0 p-3 text-secondary">1234 Kb</p>
                <div class="d-flex row button ms-3">
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-download"></i></button>
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between p-0">
                <p class="mb-0 p-3">Pertemuan 1.ppt</p>
                <p class="ms-auto mb-0 p-3 text-secondary">1234 Kb</p>
                <div class="d-flex row button ms-3">
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-download"></i></button>
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between p-0">
                <p class="mb-0 p-3">Pertemuan 1.ppt</p>
                <p class="ms-auto mb-0 p-3 text-secondary">1234 Kb</p>
                <div class="d-flex row button ms-3">
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-download"></i></button>
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-eye"></i></button>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between p-0">
                <p class="mb-0 p-3">Pertemuan 1.ppt</p>
                <p class="ms-auto mb-0 p-3 text-secondary">1234 Kb</p>
                <div class="d-flex row button ms-3">
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-download"></i></button>
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-eye"></i></button>
                </div>
            </div>
        </div><div class="card mb-2">
            <div class="card-body d-flex justify-content-between p-0">
                <p class="mb-0 p-3">Pertemuan 1.ppt</p>
                <p class="ms-auto mb-0 p-3 text-secondary">1234 Kb</p>
                <div class="d-flex row button ms-3">
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-download"></i></button>
                    <button type="button" class="btn col-6" style="height: 100%"><i
                                class="fa-solid fa-eye"></i></button>
                </div>
            </div>
        </div>



    </div> <!--Content Materi-->
</div><!--Materi-->