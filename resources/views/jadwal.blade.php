@extends('layouts.main')

@section('page')
    {{--header--}}
    <div class="d-flex flex-wrap flex-column flex-sm-row p-3 px-4">
        <div class="d-flex">
            <h3 class="mb-0 mr-3 fw-semibold title-color">
                Semester
                @if(request('semester'))
                    {{request('semester')}}
                @else
                    {{auth()->user()->semester}}
                @endif
            </h3>
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

    <!--Jadwal kuliah content-->
    @include('partials.jadwalContent_prt')
@endsection
