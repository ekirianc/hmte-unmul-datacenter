@extends('layouts.main')

@section('page')

    {{---------------------------------
          jadwal kuliah Section
    ---------------------------------}}
    <div class="jadwal-kuliah mb-4">
        <!--Header-->
        <div class="jadwal-header header d-flex flex-wrap flex-column flex-sm-row p-3 px-4">
            <div class="d-flex">
                {{--content toogle button--}}
                <button type="button" class="btn bg-transparent mr-3 "
                        data-bs-toggle="collapse" data-bs-target="#collapseJadwal" aria-expanded="true">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
                <h3 class="mb-0 mr-3 fw-semibold title-color">Jadwal Kuliah</h3>
                <!-- edit button -->
                <button class="btn ms-2 d-block d-sm-none " type="button"><span class="fa fa-edit"></span> Edit</button>
            </div>
            <!-- semester selector button -->
            <button class="btn dropdown dropdown-toggle dropdown-center ms-md-auto" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Semester
                @if(request('semester'))
                    {{request('semester')}}
                @else
                    {{auth()->user()->semester}}
                @endif
            </button>
            @include('partials.semester_list')
            <!-- edit button -->
            <button class="btn btn-edit ms-2 d-none d-sm-block" type="button"><span class="fa fa-edit"></span> Edit</button>
        </div> <!--header-->

        <!-- Jadwal kuliah content -->
        @include('partials.jadwalContent_prt')

    </div> <!--jadwal kuliah section-->

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
            <h3 class="mb-0 mr-3 fw-semibold title-color">Materi</h3>
            <!-- semester selector button -->
            <button class="btn dropdown dropdown-toggle dropdown-center mr-3 ms-auto" type="button" data-bs-toggle="dropdown"
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
                @include('partials.materiContent_prt')
            </div>
        </div>

    </div><!--Materi section -->


    {{---------------------------------
              Ebook Section
    ---------------------------------}}
    <div class="ebook mb-5">
        <!--judul-->
        <div class="header ebook-header d-sm-flex p-3 px-4">
            <button type="button" class="btn bg-transparent mr-3"
                    data-bs-toggle="collapse" data-bs-target="#collapseEbook" aria-expanded="false">
                <i class="bi bi-caret-down-fill"></i>
            </button>
            <h3 class="mb-0 mr-3 fw-semibold title-color">Ebook</h3>
            <div class="input-group ms-auto">
                <input type="text" class="form-control" placeholder="Cari Ebook"
                       aria-describedby="basic-addon2">
                <button class="btn" type="button" id="button-addon2">Search</button>
            </div>
        </div> <!--judul-->

        <!--ebook content-->
        <div class="collapse show" id="collapseEbook">
            <div class="content-ebook dashboard p-3 px-4 ">
                @include('partials.ebookContent_prt')

            </div> <!--Content ebook-->
        </div>

    </div><!--ebook section-->

@endsection
