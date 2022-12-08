@extends('dashboard.layouts.main')

@section('page')

    {{------------------- Info Card -------------------}}
    <div class="row mb-4">
        @include('dashboard.cards.card_seminar')
        @include('dashboard.cards.card_kuliah')
        @include('dashboard.cards.card_organisasi')
    </div>

    {{------------------- jadwal kuliah Section -------------------}}
    <div class="jadwal-kuliah mb-4">
        <!--Header-->
        <div class="jadwal-header header d-flex flex-wrap flex-column flex-sm-row p-3 px-4">
            <div class="d-flex">
                {{--content toogle button--}}
                <button type="button" class="btn bg-transparent mr-3 "
                        data-bs-toggle="collapse" data-bs-target="#collapseJadwal" aria-expanded="true">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
                <h3 class="mb-0 mr-3 fw-semibold text-dark-grey">Jadwal Kuliah</h3>
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
            @include('dashboard.partials.semester_list')
            <!-- edit button -->
            <button class="btn btn-edit ms-2 d-none d-sm-block" type="button"><span class="fa fa-edit"></span></button>

        </div> <!--header-->

        <!-- Jadwal kuliah content -->
        <div class="collapse show" id="collapseJadwal">
            @include('dashboard.content.content_jadwal')
        </div>

    </div> <!--jadwal kuliah section-->

    {{--        @include('sections.dashboard_materi')--}}
    {{--        @include('sections.dashboard_ebook')--}}

    <div class="d-flex justify-content-center flex-row mb-3 mt-5 ">
        <button class="btn border border-sencondary px-4 dashboard-edit-button">Edit Dashboard Section</button>
    </div>

@endsection
