@extends('dashboard.layouts.main')

@section('page')
    {{--$matkul ngambil dari kontroler [MatkulController] --}}

    <div class="hstack gap-3">
        <h1>{{ str_replace('Matkul | ', '' , $title)  }}</h1>
        <button class="btn  btn-sm btn-secondary dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-regular fa-pen-to-square mr-1"></i> action
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/kurikulum/{{$slug}}/edit"><i class="fa-regular fa-pen-to-square"></i> edit</a></li>
            <li>
                <form action="/kurikulum/{{$slug}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="dropdown-item" onclick="return confirm('Yakin hapus matkul?')"><i class="bi bi-trash"></i> remove</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="hstack gap-3">
        <span class="bg-grey-1 badge"> <h6 class="m-0 fw-bold">SKS: {{ $sks }}</h6></span>
        <span class="bg-grey-1 badge">
            <a href="/kurikulum?semester={{ $semester }}" class="text-dark-grey "> <h6 class="m-0 fw-bold">Semester: {{ $semester }} </h6></a>
        </span>
    </div>


    @foreach($dosens as $i => $dosen)
        @if(!($i>1))
            <div class="mt-3 row">
                <div class="col-6 mb-4">
                    <div class="card overflow-hidden">
                        <div class="d-flex ">
                            <img src="/images//icon/default-pict.png" alt="" width="120px" height="120px">
                            <div class="px-4 d-flex flex-column align-self-center">
                                <a href="/dosen/{{$dosen->name}}" class="fw-semibold m-0">{{$dosen->name}}</a>
                                <p class="m-0">{{$dosen->NIP}}</p>
                                <p class="m-0">{{$dosen->bidang}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @break
        @endif

    @endforeach

@endsection