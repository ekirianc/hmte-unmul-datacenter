@extends('dashboard.layouts.main')

@section('page')
    <!--judul, pilihan semester-->
    <div class="d-sm-flex flex-wrap p-3 px-4">
        <h3 class="mb-0 mr-3 fw-semibold title-color">Pengolahan Citra Digital</h3>
        <button class="btn ms-auto dropdown dropdown-toggle dropdown-center" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
            Pengolahan Citra Digital
        </button>
        <ul class="dropdown-menu">
            <li><h6 class="dropdown-header">Semester</h6></li>
            <li>
                <ul class="nav nav-pills mx-3">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">7</a>
                    </li>
                </ul>
            </li>
            <li>
            <li><h6 class="dropdown-header">mata kuliah</h6></li>
            <li class="overflow-hidden">
                <ul class="list-group">
                    <li><a class="dropdown-item active" href="#">Interaksi Manusia dan Komputer</a></li>
                    <li><a class="dropdown-item" href="#">Komputer Vision</a></li>
                    <li><a class="dropdown-item" href="#">Sistem Keamanan</a></li>
                    <li><a class="dropdown-item" href="#">Pemrograman Mobile</a></li>
                    <li><a class="dropdown-item" href="#">Sistem Operasi</a></li>
                </ul>
            </li>


        </ul>
        <button class="btn"><i class="fa-regular fa-pen-to-square"></i></button>
    </div> <!--header-->


    <!--Content Materi-->
    <div class="collapse show" id="collapseMateri">
        <div class="content-materi page px-4 pt-3">
            <div class="row">
                @include('dashboard.content.content_materi')
            </div>
        </div>
    </div>
@endsection
