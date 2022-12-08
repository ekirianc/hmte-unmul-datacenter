@extends('dashboard.layouts.main')

@php
    function getCurrentSemester($semester){
        $currSemester = $semester;
        if(request('semester')){
            $currSemester =  request('semester');
        }
        else{
           $currSemester;
        }
        return $currSemester;
    }
@endphp

@section('page')
    {{--header--}}
    <div class="d-flex flex-wrap flex-column flex-sm-row p-3 px-4">
        <h3 class="text-center fw-semibold d-block d-sm-none">Semester 1</h3>
        <div class="d-flex ">
            {{--tittle--}}
            <h3 class="mb-0 mr-3 fw-semibold text-dark-grey d-none d-sm-block">
                Semester {{getCurrentSemester(auth()->user()->semester)}}
            </h3>
            <!-- edit button, only on small -->
            {{--<button class="btn ms-2 d-block d-sm-none " type="button"><span class="fa fa-edit"></span> </button>--}}
        </div>
        <!-- semester selector button -->
        <div class="d-flex ms-md-auto">
            <div class="dropdown-center flex-fill">
                <button class="btn dropdown-toggle dropdown-center w-100" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Semester {{getCurrentSemester(auth()->user()->semester)}}
                </button>
                @include('dashboard.partials.semester_list')
            </div>
            <!-- edit button, hide on small -->
            <button class="btn btn-edit ms-2 " type="button"><span class="fa fa-edit"></span></button>
        </div>

    </div> <!--header-->

    {{--konten jadwal kuliah--}}
    @include('dashboard.content.content_jadwal')
@endsection
